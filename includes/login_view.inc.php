<?php

declare(strict_types=1);

function login_inputs(){
     if(isset($_SESSION["login_data"]["username"]) && !isset(
        $_SESSION["errors_login"]["username_taken"])) {
            echo ' <div class="form-group">
            <input type="text" id="username" name="username"  
            value="' . $_SESSION["login_data"]["username"] .'"> 
            </div>';
      }else {
          echo '<label for="email">Username</label>';
        echo '<input type="text" id="username" name="username">';
      }

      
        echo ' <label for="pwd">Password</label>';
     echo '<input type="password" id="pwd" name="pwd"> ';
            echo "<br>";


}

function check_login_errors(){
    if(isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

            echo "<br>";

        foreach($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);

    }  else if(isset($_GET['login']) && $_GET['login'] === 'Successful') {
       echo "<br>";
       echo  '<p class="form-success">Login Successful!</p>';
    }
};