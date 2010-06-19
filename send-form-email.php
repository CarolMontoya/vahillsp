<?php
global $siteTitle;
$siteTitle = "Email sent";
include_once "header.inc";

if(isset($_POST['email'])) {
  
  // EDIT THE 2 LINES BELOW AS REQUIRED
  $email_to = "mitchellandsuzy@juno.com";
  $email_subject = "Deep Water Aerobics";
  
  
  function died($error) {
    // your error code can go here
    echo "<div class=\"rounded\">";
    echo "We are very sorry, but there were error(s) found with the form your submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    echo "</div>";
    die();
  }
  
  // validation expected data exists
  if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['phone'])) {
    died('We are sorry, but there appears to be a problem with the form your submitted.');    
  }
  
  $name = $_POST['name']; // required
  $email = $_POST['email']; // required
  $phone = $_POST['phone']; // not required

  $error_message = "";
  $email_exp = "/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[a-zA-Z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[0-9 .-]+$/";
  if(!preg_match($string_exp,$phone)) {
    $error_message .= 'The Phone Number you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  $email_message = "Form details below.\n\n";
  
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
  
  $email_message .= "Name: ".clean_string($name)."\n";
  $email_message .= "Email: ".clean_string($email)."\n";
  $email_message .= "Phone: ".clean_string($phone)."\n";
  
  
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->
<div class="rounded">
Thank you for contacting us. We will be in touch with you very soon.
</div>
<?php
}
include_once "footer.inc";
?>
