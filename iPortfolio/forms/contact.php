<?php
// Replace this with your email address
$to = "your@email.com";

// Validate POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? 'New message from your website';
$message = $_POST['message'] ?? '';

if (!$name || !$email || !$message) {
  echo "Please fill in all required fields.";
  exit;
}

// Email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Full message
$body = "You have received a new message:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Subject: $subject\n\n";
$body .= "Message:\n$message\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  echo "Message sent successfully!";
} else {
  echo "Failed to send the message.";
}
?>
