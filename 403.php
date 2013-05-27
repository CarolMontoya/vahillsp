<?php
  global $siteTitle;
  $siteTitle = "403 - Access denied";
  include_once "header.inc";
  require_once dirname(__FILE__).'/../script-kiddie/script-kiddie.php';

  // Generate email with error - suggestion from http://members.cox.net/midian/tutorials/php404.htm
  $from_header = "From: web_server@vahillspool.org\r\n";
  $to = "webmaster@vahillspool.org";
  $subject = "403 Error";
  $today = date("D M j Y g:i:s a T");
  $ip = getenv ("REMOTE_ADDR");
  $requri = getenv ("REQUEST_URI");
  $servname = getenv ("SERVER_NAME");
  $pageload = $ip . " was blocked from loading http://" . $servname . $requri ;
  $httpagent = getenv ("HTTP_USER_AGENT");
  $httpref = getenv ("HTTP_REFERER");
  $message = "$today \n\n$pageload \n\nUser Agent = $httpagent \n\n$httpref ";
  mail($to, $subject, $message, $from_header);

  ScriptKiddie::freeIP($ip);
?>
<div class="rounded">
  <h2>Sorry, you have been blocked!</h2>
  <p>We're sorry, your IP address has tried to access invalid resources too
  many times. As a result you were blocked. Please email
  webmaster[at]vahillspool.org if you believe this to be in error.
  If you do, please make sure to report your referring IP address (<?php echo $ip; ?>)</p>
</div>
<?php include_once "footer.inc"; ?>
