<?php

$errors = [];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Sanitize form data
  $first_name = trim($_POST['first-name']);
  $last_name = trim($_POST['last-name']);
  $email = trim($_POST['email']);
  $telephone = trim($_POST['telephone']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);

  // Validate first name
  if (empty($first_name)) {
    $errors['first-name'] = 'First name is required';
  }

  // Validate last name
  if (empty($last_name)) {
    $errors['last-name'] = 'Last name is required';
  }

  // Validate email address
  if (empty($email)) {
    $errors['email'] = 'Email address is required';
  } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
    $errors['email'] = 'Invalid email address';
  }

  // Validate telephone number
  if (empty($telephone)) {
    $errors['telephone'] = 'Telephone number is required';
  } elseif (strlen($telephone) > 11) {
    $errors['telephone'] = 'Telephone number must be 11 characters or less';
  }

  // Validate subject
  if (empty($subject)) {
    $errors['subject'] = 'Please select a subject';
  }

  // Validate message
  if (empty($message)) {
    $errors['message'] = 'Message is required';
  }

  // If there are no errors, save data to database and send email
  if (empty($errors)) {
    // Save data to database
    // ...

    // Send email
    // ...

    // Redirect to success page
    header('Location: success.php');
    exit;
  }

}

?>
