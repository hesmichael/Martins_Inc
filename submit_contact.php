<?php
// Handle contact form submission from contact.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Sanitize user input
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Validate required fields
  if (empty($name) || empty($email) || empty($message)) {
    echo "<h3 style='color:red;'>All fields are required.</h3>";
    exit;
  }

  // Prepare the message string
  $entry = "Name: $name\nEmail: $email\nMessage: $message\n---\n";

  // Save the message to a file
  file_put_contents("contact_messages.txt", $entry, FILE_APPEND);

  // Redirect to homepage after submission
  header("Location: index.php?msg=success");
  exit;

} else {
  echo "<h3 style='color:red;'>Access Denied: No form submitted.</h3>";
}
?>
