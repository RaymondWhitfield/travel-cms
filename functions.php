<?php

//Look for empty Registration fields for register.php error handling
function emptyFields($firstname, $lastname,$email,$password1,$password2){
    $result;

    if(empty($firstname) ||empty($lastname) ||empty($email) || empty($password1) || empty($password2)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


//Check for valid email
function invalidEmail($email){
    $result;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


//Password match user entered passwords for Registration
function matchPassword($password1,$password2){
    $result;

    if($password1 !== $password2){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


/*Checks if a customer already exists based on their email*/
function customerExists($conn, $email){
    //Query with a placeholder for email
    $sql = "SELECT * FROM customer where Email = ?;";

    //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    $stmt = mysqli_stmt_init($conn);

    //Prepares an SQL statement for execution
    if(!mysqli_stmt_prepare($stmt, $sql)){
        
        //If something goes wrong, go here
        header("location: register.php?error=prepfailed");
            exit();
    }

    //Binds variables to a prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $email);

    //Execute the prepared statement
    mysqli_stmt_execute($stmt);

    //Return the statement as an object
    $result = mysqli_stmt_get_result($stmt);

    //Fetch customer associative array to compare with user inputted email
    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


/*Creates user, inserts into DB, hashes password*/
function createUser($conn, $email, $password1, $firstname, $lastname){
    //Query with placeholders for Email and Password for user creation
    $sql = "INSERT INTO customer (Email, Password, FirstName, LastName) VALUES (?, ?, ?, ?);";

    //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    $stmt = mysqli_stmt_init($conn);

    //Prepares an SQL statement for execution
    if(!mysqli_stmt_prepare($stmt, $sql)){

        //If something goes wrong, go here
        header("location: register.php?error=prepfailed");
            exit();
    }

    //Using PHP hashing algorithm, minimum 60 varchar in DB, 255 recommended
    $hashpwd = password_hash($password1, PASSWORD_DEFAULT);

    //Binds variables to a prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssss", $email, $hashpwd,$firstname, $lastname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: login.php");
    exit();
}


/*For Login Page error handling*/
function emptyLogin($email,$password){
    $result;

    if(empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


/*Checks for email in DB, compares entered PW to DB hashed PW and creates a session
 if checks pass */
function loginUser($conn, $email, $loginPW){
    $customerExists = customerExists($conn, $email);

    if($customerExists === false){
        header("location: login.php?error=nologin");
        exit();
    }
    
    $hashpassword = $customerExists["Password"];
    $verifyhashPW = password_verify($loginPW, $hashpassword);
    

    if($verifyhashPW === false){
        header("location: login.php?error=nologin");
        exit();
    }
    else if($verifyhashPW === true){
        session_start();
        $_SESSION["Id"] = $customerExists["CustomerID"];
        $_SESSION["Email"] = $customerExists["Email"];
        $_SESSION["FirstName"] = $customerExists["FirstName"];
        header("location: index.php");
        exit();
    }
}

/*Inserts review into DB*/
function submitReview($conn, $bookingID, $title, $comments, $rating){
    //Query with placeholders for Email and Password for user creation
    $sql = "INSERT INTO review (BookingID, Title, Comments, Rating) VALUES (?, ?, ?, ?);";

    //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    $stmt = mysqli_stmt_init($conn);

    //Prepares an SQL statement for execution
    if(!mysqli_stmt_prepare($stmt, $sql)){

        //If something goes wrong, go here
        header("location: register.php?error=prepfailed");
            exit();
    }

    //Binds variables to a prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "issi", $bookingID,$title, $comments,$rating);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    //header("location: Reviews.php");
    exit();
}
