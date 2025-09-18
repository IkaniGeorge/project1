<?php
//how to inset data into db
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
 

    try {
        require_once "dbh.inc.php";
        require_once "register_model.inc.php";
        require_once "register_contr.inc.php";

        //Error Handling

        $errors =[];

        if(is_input_empty($firstname, $lastname, $username, $email, $pwd)){
                $errors["empty_input"] = "Fill all field!";
        }
        if(is_email_inavalid($email)){ 
            $errors["invalid_email"] = "Invalid Email address! "; 
        }
        if(is_username_taken($pdo, $username)){
             $errors["username_taken"] = "Username already exist!";
        }

        if(is_email_registered( $pdo, $email)){
             $errors["email_registered"] = "Email already registerd!";
        }

        require_once 'config_session.inc.php';

        if($errors) {
            $_SESSION["errors_register"] = $errors;
             //assigning session variable to a value!
             header("Location: ../register.php");
             die();   
        }


        //Adding Create user to the register page
         create_user($pdo, $firstname, $lastname, $username, $email, $pwd);

         header("Location: ../register.php?register=Successful");

              $pdo = null;
             $stmt = null;
        die();  
    } catch (PDOException $e) {
        die("querry failed:" . $e->getMessage());
    }
}    else{
        header("Location: ../register.php");
        die();
    }