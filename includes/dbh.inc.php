<?php

$dsn = "mysql:host=localhost;dbname=registrationbase";
$dbusername ="root";
$dbpassword = "";


//Error Handling
//Connecting to db with php 
try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}