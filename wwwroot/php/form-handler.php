<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $company = $_POST["company"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  // Create email message
  $message = "Name:     " . $name . "\n";
  $message .= "Company: " . $company . "\n";
  $message .= "Email:   " . $email . "\n";
  $message .= "Phone:   " . $phone . "\n";

  // Set recipient email address
  $to = "rusty@rddsoftware.com";

  // Set email subject
  $subject = "Form Submission";

  // Set headers
  $headers = "From: " . $email . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>
