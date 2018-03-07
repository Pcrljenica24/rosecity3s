<?php
if (isset($_POST['send'])) {
  $to = 'pc3@pdx.edu';
  $subject = 'Client Feedback and(or) Questions';
  $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
  $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
  $message .= 'Comments: ' . $_POST['comments'];
  echo $message;
}
?>


<!DOCTYPE html>
<title>Sent Message</title>
  <body>
    <h1>Thank You</h1>
    <p>Your message has been sent.</p>
    <h1>Oops!</h1>
    <p>Sorry, there was a problem sending your message.</p>
  </body>
