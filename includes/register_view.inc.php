<?php
// The view that shows info on the website
declare(strict_types=1);

//error handling for register new user
function check_register_errors(){
    if(isset($_SESSION['errors_register'])) {
        $errors = $_SESSION['errors_register'];

        echo "<br>";

        foreach($errors as $error){
            echo '<p>' . $error . '</p>';
        }

        unset($_SESSION['errors_register']);
    }
}

 