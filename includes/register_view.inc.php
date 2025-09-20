<?php
// The view that shows info on the website
declare(strict_types=1);

function register_inputs() {

      if(isset($_SESSION["register_data"]["firstname"]) && !isset(
        $_SESSION["errors_register"]["fill in all feld"])) {
            echo ' <div class="form-group">
             <label for="firstname">FirstName</label>
            <input type="text" id="firstname" name="firstname"  
            value="' . $_SESSION["register_data"]["firstname"] .'"> 
            </div>';
      }else {
        echo '  <label for="lastname">Firstname</label>';
        echo '<input type="text" id="firstname" name="firstname"';
      }
    

      if(isset($_SESSION["register_data"]["lastname"]) && !isset(
        $_SESSION["errors_register"]["fill in all feld"])) {
            echo ' <div class="form-group">
            <input type="text" id="lastname" name="lastname"  
            value="' . $_SESSION["register_data"]["lastname"] .'"> 
            </div>';
      }else {
          echo '  <label for="lastname">Lastname</label>';
        echo '<input type="text" id="lastname" name="lastname">';
      }

      if(isset($_SESSION["register_data"]["username"]) && !isset(
        $_SESSION["errors_register"]["username_taken"])) {
            echo ' <div class="form-group">
            <input type="text" id="username" name="username"  
            value="' . $_SESSION["register_data"]["username"] .'"> 
            </div>';
      }else {
          echo '<label for="email">Username</label>';
        echo '<input type="text" id="username" name="username">';
      }

      if(isset($_SESSION["register_data"]["email"]) && !isset(
        $_SESSION["errors_register"]["invalid_email"])
          && !isset(
        $_SESSION["errors_register"]["email_registered"])) {
            echo ' <div class="form-group">
            <input type="text" id="email" name="email"  
            value="' . $_SESSION["register_data"]["email"] .'"> 
            </div>';
      }else {
          echo '  <label for="email">Email</label>';
        echo '<input type="text" id="email" name="email">';
      }
         

        echo ' <label for="pwd">Password</label>';
     echo '<input type="pwd" id="pwd" name="pwd"> ';
            echo "<br>";
     //echo '<button type="submit">Register</button>';

        

}

//error handling for register new user
function check_register_errors(){
    if(isset($_SESSION['errors_register'])) {
        $errors = $_SESSION['errors_register'];

        echo "<br>";

        foreach($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_register']);
    }else if(isset($_GET['register']) && $_GET['register'] === 'Successful'){
        echo '<br>';
        echo '<p class="form-success">Registration Successful </p>';

    }
} 

 