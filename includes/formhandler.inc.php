<?php
//how to inset data into db
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
 

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (firstname, lastname, email, pwd) VALUES
        (:firstname, :lastname, :email, :pwd);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../register.php");
        die(); 
    } catch (PDOException $e) {
        die("querry failed:" . $e->getMessage);
    }
}    else{
        header("Location: ../register.php");

    }