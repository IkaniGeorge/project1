<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookies_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);

session_start(); 
//session regeneration after 30min
if(!isset($_SESSION['last_generation'])){
    regenerateSessionId();
    //session_regenerate_id();
    //$_SESSION['last_regeneration'] = time();

}else{
    $interval = 60 * 30;

    if(time() - $_SESSION['last_regeneration'] >= $interval){
        regenerateSessionId();
    }
}

function regenerateSessionId() {
        session_regenerate_id();
        $_SESSION['last_regeneration'] = time();
}