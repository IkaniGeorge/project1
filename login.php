 <?php
        require_once 'includes/login_view.inc.php';
        require_once 'includes/config_session.inc.php';
 ?>
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="form-container">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
      <?php
      login_inputs();
      ?>
      </br>
      <button type="submit">Login</button>
    </form>
     <?php

    check_login_errors();
    ?>
  </div>

 
</body>
</html>
