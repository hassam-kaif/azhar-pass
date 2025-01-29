<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  
  // Set your email address
  $to = "hasssamkaif123@gmail.com";
  $subject = "New Form Submission";
  $message = "Name: $name\nEmail: $email";
  $headers = "From: $email";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo "Form submitted successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>
