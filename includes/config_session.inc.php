<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);

session_start(); 
// this is for login session
if(isset($_SESSION["user_id"])) {
    //session regeneration after 30min
if(!isset($_SESSION['last_generation'])){
    regenerate_Session_Id_loggedin();
    

} else {
    $interval = 60 * 30;

    if(time() - $_SESSION['last_regeneration'] >= $interval){
        regenerate_Session_Id_loggedin();
    }
}
} else {

// Down bellow is for user signup or registration session time interval
//session regeneration after 30min
if(!isset($_SESSION['last_generation'])){
    regenerate_Session_Id();
   
}else{
    $interval = 60 * 30;

    if(time() - $_SESSION['last_regeneration'] >= $interval){
        regenerate_Session_Id();
    }
}

}
function regenerate_Session_Id_loggedin() {

        session_regenerate_id(true);

           //seting up sessionId for Login page.  
        // $userId = $_SESSION["user_id"];
        // $newSessionId = session_create_id();
        // $sessionId = $newSessionId . "_" . $userId;
        // session_id($sessionId);


        $_SESSION['last_regeneration'] = time();
};

function regenerate_Session_Id() {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
}