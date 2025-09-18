<?php
// Our models take care of querying the db
declare(strict_types=1);

function get_username(object $pdo, string $username){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email){
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//inserting a new user into db 
function set_user(object $pdo, string $firstname, string $lastname, string $username, string $email, string $pwd){
    $query = "INSERT INTO users(firstname, lastname, username, email, pwd) VALUES (:firstname, :lastname, :username, :email, :pwd);"; 
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    //hashing of password enable pwd not to be expose to hackers or
    //anyone with access to your db
    $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedpwd);
    $stmt->execute();
}
