<?php
  global $siteTitle;
  $siteTitle = "404 - Page not found";
  include_once "header.inc";
  require_once dirname(__FILE__) . '/../script-kiddie/script-kiddie.php';

  // Generate email with error - suggestion from http://members.cox.net/midian/tutorials/php404.htm
  $from_header = "From: web_server@vahillspool.org\r\n";
  $to = "webmaster@vahillspool.org";
  $subject = "404 Error";
  $today = date("D M j Y g:i:s a T");
  $ip = getenv ("REMOTE_ADDR");
  $requri = getenv ("REQUEST_URI");
  $servname = getenv ("SERVER_NAME");
  $pageload = $ip . " tried to load http://" . $servname . $requri ;
  $httpagent = getenv ("HTTP_USER_AGENT");
  $httpref = getenv ("HTTP_REFERER");
  $message = "$today \n\n$pageload \n\nUser Agent = $httpagent \n\n$httpref ";
  mail($to, $subject, $message, $from_header);

  ScriptKiddie::checkIP($ip);
?>
<div class="rounded">
  <h2>Sorry, page not found!</h2>
  <p>We're sorry, we could not find the page you were looking for.</p>
  <script type="text/javascript">
    var GOOG_FIXURL_LANG = 'en';
    var GOOG_FIXURL_SITE = 'http://www.vahillspool.org'
  </script>
  <script type="text/javascript"
    src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js">
  </script>
</div>
<?php include_once "footer.inc"; ?>
