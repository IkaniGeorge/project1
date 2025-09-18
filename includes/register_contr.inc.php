<?php
//Our controller takes care of any sort of info

declare(strict_types=1);
//This is to check if the input form fields are empty
function is_input_empty(string $firstname, string $lastname, string $username, string $email, string $pwd){
    if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($pwd)){
        return true;
        
    }else{
        return false;
    }
}
// this will notify the user when he inputs an invalid email address.
function is_email_inavalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
} 

//this will notify the user if the username is taken by someone else
function is_username_taken(object $pdo, string $username){ // code is in register_model.inc.php
    if(get_username($pdo, $username)){
        return true;
    }else{
        return false; 
    }
    }

function is_email_registered(object $pdo, string $email){ // code is in register_model.inc.php
    if(get_email($pdo, $email)){
        return true;
    }else{
        return false;
    }
} 

function create_user(object $pdo, string $firstname, string $lastname, string $username, string $email, string $pwd){

    set_user($pdo, $firstname, $lastname, $username, $email, $pwd);

}






