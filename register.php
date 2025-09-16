   <?php
        require_once 'includes/register_view.inc.php';
        require_once 'includes/config_session.inc.php';
   ?>
   
   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="form-container">
    <h2>Register</h2>
    <form action="includes/register.inc.php" method="post">
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
      <div class="form-group">
        <label for="username">User Name</label>
        <input type="username" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="confirm-email">Confirm Email</label>
        <input type="email" id="confirm-email" name="confirm-email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="pwd" id="pwd" name="pwd" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <button type="submit">Register</button>
    </form>

    <p class='form-error'></p>

    <?php

    check_register_errors();
    ?>
</body>
</html>
