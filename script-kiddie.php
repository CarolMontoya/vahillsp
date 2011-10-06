<?php 

date_default_timezone_set('America/New_York');
require_once dirname(__FILE__).'/log4php/Logger.php';
Logger::configure(dirname(__FILE__).'/resources/log4php.properties');

/**
 * Class to manage IP bans in .htaccess automatically
 */
class ScriptKiddie {
  
  const DATAFILE = 'BadAttemptList.txt';
  const KEEP_CACHE_ENTRIES_SEC = 900;
  const MAX_BAD_ATTEMPT_IN_15_MINS = 5;
  const HTACCESS = '.htaccess';

  private static $badAttempts = array();
  private static $logger;

  /**
   * init function to be called at startup to make sure the static class is set up correctly.
   */
  public static function init() {
    self::$logger = Logger::getLogger('ScriptKiddie');
    self::$badAttempts = self::loadBadAttempts();
  }

  static private function loadBadAttempts() {
    if (file_exists(self::DATAFILE)) {
      $data = file_get_contents(self::DATAFILE);
      $data = unserialize($data);
    }
    if (empty($data)) { $data = array(); }
    self::$logger->debug("Loaded " . count($data) . " IP addresses from cache in " . self::DATAFILE);
    return self::expireOldEntries($data);
  }

  static private function saveBadAttempts($data) {
    self::$logger->debug('Writing data file ' . self::DATAFILE);
    // TODO: check for empty data
    $data = self::expireOldEntries($data);
    file_put_contents(self::DATAFILE,serialize($data));
  }

  static private function addBadAttempt($ip) {
    self::$logger->debug("Adding IP $ip to list");
    if (empty(self::$badAttempts[$ip])) { 
      self::$badAttempts[$ip] = array(); 
    }
    array_push(self::$badAttempts[$ip], time());
    self::saveBadAttempts(self::$badAttempts);
  }

  static private function removeEmptyIP($ip, $data) {
    if (empty($data[$ip])) {
      self::$logger->debug("Removing IP $ip from list because it no longer has any bad attempts cached");
      self::$logger->trace(self::$badAttempts);
      unset($data[$ip]);
    }
    return $data;
  }

  static private function expireOldEntries($data) {
    foreach ($data as $ip => $badAttemptsList) {
      foreach ($badAttemptsList as $badAttempt => $val) {
        //echo time(), ": ", $val, " = ", time() - $val, "; ", self::KEEP_CACHE_ENTRIES_SEC, " ban: ", $badAttempt, "\n";
        if (time() - $val > self::KEEP_CACHE_ENTRIES_SEC) {
          self::$logger->debug("Removing bad attempt $badAttempt for IP $ip because it is " . (time() - $val) . " seconds old");
          unset($data[$ip][$badAttempt]);
        }
      }
      $data = self::removeEmptyIP($ip, $data);
    }
    //self::$logger->debug(self::$badAttempts);
    return $data;
  }

  static private function numBadAttemptsLast15minutes($ip) {
    $data = self::expireOldEntries(self::$badAttempts);
    self::$logger->trace($data);
    self::$logger->trace("Number of bad attempts in last " . self::KEEP_CACHE_ENTRIES_SEC . " seconds: " . (empty($data[$ip]) ? 0 : count($data[$ip])));
    return empty($data[$ip]) ? 0 : count($data[$ip]);
  }

  static private function evalIPban($ip) {
    $numBadAttempts = self::numBadAttemptsLast15minutes($ip);
    if ($numBadAttempts > self::MAX_BAD_ATTEMPT_IN_15_MINS) {
      self::$logger->debug("IP $ip banned (too many attempts: $numBadAttempts) in " . self::KEEP_CACHE_ENTRIES_SEC . " seconds");
      return true;
    } else {
      self::$logger->debug("IP $ip NOT banned");
      return false;
    }
  }

  static private function addIPtoDenyList($ip) {
    $htaccess = file(self::HTACCESS);
    $cnt = 0;
    $insertPoint = 0;
    $alreadyThere = false;

    self::$logger->debug("Checking IP $ip in " . self::HTACCESS);
    foreach ($htaccess as $key => $line) {
      self::$logger->trace("$cnt: $line");
      if (preg_match("/^deny from (.*)$/", $line, $ipMatch)) {
        if (!self::evalIPban($ipMatch[1])) {
          // no entries exist for this IP, we can remove it from the file
          self::$logger->info("Removing ban for $ipMatch[1]");
          continue;
        } else {
          if ($ipMatch[1] == $ip) {
            self::$logger->info("Deny for IP $ipMatch[1] already in " . self::HTACCESS . " at line $cnt");
            $alreadyThere = true;
          }
          // need to keep processing file to make sure we remove old bans, otherwise we could return here
        }
      } 
      if (preg_match("/^# insert denies here/", $line)) {
        $insertPoint = $cnt;
        self::$logger->debug("Found insert point at line $insertPoint");
      }
      $result[] = $line;
      $cnt++;
    }
    if ($insertPoint == 0) { 
      $insertPoint = $cnt;
      self::$logger->debug("No specific insert point found, adding line at and of " . self::HTACCESS . " (line $insertPoint)");
    }
    if (!$alreadyThere && self::evalIPban($ip)) {
      array_splice($result, $insertPoint + 1, 0, array("deny from " . $ip . "\n"));
      self::$logger->info("Added IP $ip to line $insertPoint in " . self::HTACCESS);
    }
    if (self::$logger->isEnabledFor(LoggerLevel::getLevelTrace())) {
      self::$logger->trace("Result array:\n" . print_r($result, true));
    }
    $fh = fopen(self::HTACCESS, "w");
    foreach ($result as $line) {
      if (!fwrite($fh, $line)) {
        self::$logger->error("Could not write " . self::HTACCESS);
        break;
      }
    }
    fclose($fh);
  }

  static public function checkIP($ipin) {
    self::$logger->debug("*** Start checking for ban: IP address passed in: $ipin");
    $ip = long2ip(ip2long($ipin));
    self::addBadAttempt($ip);
    self::addIPtoDenyList($ip);
  }

  static public function freeIP($ipin) {
    self::$logger->debug("*** Check if we can free: IP address passed in: $ipin");
    $ip = long2ip(ip2long($ipin));
    self::saveBadAttempts(self::$badAttempts);
    self::addIPtoDenyList($ip);
  }

  static public function dumpBadAttempts() {
    self::$logger->debug("Dumping IP bad attempts list:\n" . print_r(self::$badAttempts, true));
  }

} ScriptKiddie::init();

?>
