<?php
// Initialize the session.
session_start();

// Unset all of the session variables.
$_SESSION = array();

//Delete the session cookie and parameters.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        //can add more params as needed
        $params["Email"]
    );
}

//Destroy the session.
session_destroy();
//Return to home page
header("location: index.php");
exit();

?>