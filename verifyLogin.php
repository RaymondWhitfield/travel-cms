<?php
    include "init.php";

    /*
    * Establish the database connection
    */
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }

    /*Login.php form data*/
    if(isset($_POST["submit"])){

        $email = $_POST["email"];
        $loginPW = $_POST["loginPW"];

        require 'functions.php';

        if(emptyLogin($email,$loginPW) !== false){
            header("location: login.php?error=emptylogin");
            exit();
        }

        loginUser($conn, $email, $loginPW);
    }
    else{
        header("location: login.php");
        exit();
    }
?>
