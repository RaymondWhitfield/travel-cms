<?php
    include "init.php";

    /*
    * Establish the database connection
    */
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }

    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        require_once 'functions.php';


        if(emptyFields($firstname, $lastname,$email,$password1,$password2) !== false){
            header("location: register.php?error=emptyfields");
            exit();
        }

        if(invalidEmail($email) !== false){
            header("location: register.php?error=emptyemail");
            exit();
        }

        if(matchPassword($password1, $password2) !== false){
            header("location: register.php?error=passwordmismatch");
            exit();
        }

        if(customerExists($conn, $email) !== false){
            header("location: register.php?error=emailalreadyexists");
            exit();
        }

        createUser($conn, $email, $password1, $firstname, $lastname);


    }
    else{
        header("location:register.php");
    }
    

    
?>