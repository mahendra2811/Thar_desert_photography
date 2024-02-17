<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  header('Content-Type: application/json');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Replace 'your_email@example.com' with your email address
  $to = 'mahendrapuniya92@gmail.com';
  $subject = 'New Contact Form Submission';

  $headers = "From: $name <$email>" . "\r\n";

  $success = mail($to, $subject, $message, $headers);

  echo json_encode(['success' => $success]);
} else {
  http_response_code(405);
}
?>
