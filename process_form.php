<?php
// retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// process form data here
// ...

// redirect back to the HTML form page with a success message
header('Location: contact.php?status=success');
exit();
?>
