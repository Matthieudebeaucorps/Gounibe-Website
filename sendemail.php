<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set up the recipient email address
  $to = 'your_email@example.com';

  // Set up the email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8" . "\r\n";

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect to a thank you page
  header('Location: thankyou.html');
  exit;
}
?>
