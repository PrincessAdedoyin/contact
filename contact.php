<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<div class="contact-form">
  <!-- <form method="post" action="submit-form.php"> -->
  <form method="POST" action="process_form.php">
    <div class="form-row">
      <label for="first-name">First Name <span class="required">*</span></label>
      <input type="text" id="first-name" name="first-name" required <?php if(isset($_POST['first-name'])) echo 'value="'.$_POST['first-name'].'"'; ?>>
      <?php if(isset($errors['first-name'])) echo '<div class="error">'.$errors['first-name'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="last-name">Last Name <span class="required">*</span></label>
      <input type="text" id="last-name" name="last-name" required <?php if(isset($_POST['last-name'])) echo 'value="'.$_POST['last-name'].'"'; ?>>
      <?php if(isset($errors['last-name'])) echo '<div class="error">'.$errors['last-name'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="email">Email <span class="required">*</span></label>
      <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" <?php if(isset($_POST['email'])) echo 'value="'.$_POST['email'].'"'; ?>>
      <?php if(isset($errors['email'])) echo '<div class="error">'.$errors['email'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="telephone">Telephone <span class="required">*</span></label>
      <input type="tel" id="telephone" name="telephone" required maxlength="11" <?php if(isset($_POST['telephone'])) echo 'value="'.$_POST['telephone'].'"'; ?>>
      <?php if(isset($errors['telephone'])) echo '<div class="error">'.$errors['telephone'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="subject">Subject <span class="required">*</span></label>
      <select id="subject" name="subject" required>
        <option value="">Please select</option>
        <option value="enquiry" <?php if(isset($_POST['subject']) && $_POST['subject'] == 'enquiry') echo 'selected'; ?>>Enquiry</option>
        <option value="callback" <?php if(isset($_POST['subject']) && $_POST['subject'] == 'callback') echo 'selected'; ?>>Call Back</option>
        <option value="complaint" <?php if(isset($_POST['subject']) && $_POST['subject'] == 'complaint') echo 'selected'; ?>>Complaint</option>
      </select>
      <?php if(isset($errors['subject'])) echo '<div class="error">'.$errors['subject'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="message">Message <span class="required">*</span></label>
      <textarea id="message" name="message" required><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
      <?php if(isset($errors['message'])) echo '<div class="error">'.$errors['message'].'</div>'; ?>
    </div>
    <div class="form-row">
      <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>


<!-- <div class="contact-form">
  <form method="post" action="submit-form.php">
    <div class="form-row">
      <label for="first-name">First Name <span class="required">*</span></label>
      <input type="text" id="first-name" name="first-name" required <?php if(isset($_POST['first-name'])) echo 'value="'.$_POST['first-name'].'"'; ?>>
      <?php if(isset($errors['first-name'])) echo '<div class="error">'.$errors['first-name'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="last-name">Last Name <span class="required">*</span></label>
      <input type="text" id="last-name" name="last-name" required <?php if(isset($_POST['last-name'])) echo 'value="'.$_POST['last-name'].'"'; ?>>
      <?php if(isset($errors['last-name'])) echo '<div class="error">'.$errors['last-name'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="email">Email <span class="required">*</span></label>
      <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" <?php if(isset($_POST['email'])) echo 'value="'.$_POST['email'].'"'; ?>>
      <?php if(isset($errors['email'])) echo '<div class="error">'.$errors['email'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="telephone">Telephone <span class="required">*</span></label>
      <input type="tel" id="telephone" name="telephone" required maxlength="11" <?php if(isset($_POST['telephone'])) echo 'value="'.$_POST['telephone'].'"'; ?>>
      <?php if(isset($errors['telephone'])) echo '<div class="error">'.$errors['telephone'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="subject">Subject <span class="required">*</span></label>
      <select id="subject" name="subject" required>
        <option value="">Please select</option>
        <option value="enquiry" <?php if(isset($_POST['subject']) && $_POST['subject'] == 'enquiry') echo 'selected'; ?>>Enquiry</option>
        <option value="callback" <?php if(isset($_POST['subject']) && $_POST['subject'] == 'callback') echo 'selected'; ?>>Call Back</option>
        <option value="complaint" <?php if(isset($_POST['subject']) && $_POST['subject'] == 'complaint') echo 'selected'; ?>>Complaint</option>
      </select>
      <?php if(isset($errors['subject'])) echo '<div class="error">'.$errors['subject'].'</div>'; ?>
    </div>
    <div class="form-row">
      <label for="message">Message <span class="required">*</span></label>
      <textarea id="message" name="message" required><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
      <?php if(isset($errors['message'])) echo '<div class="error">'.$errors['message'].'</div>'; ?>
    </div>
    <div class="form-row">
      <input type="submit" value="Submit">
    </div>
  </form -->
