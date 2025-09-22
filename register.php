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
     <?php
     register_inputs();
     ?>
     </br>
      <button type="submit">Register</button>
    </form>

    <?php

    check_register_errors();
    ?>
  </div>
</body>
</html>
