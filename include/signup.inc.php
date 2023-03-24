<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $home = $_POST["home"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $email = $_POST["email"];
    $certification = $_POST["certification"];
    $dob = $_POST["dob"];
    $recert = $_POST["recert"];
    $phone = $_POST["phone"];
    $payment = $_POST["payment"];
    $expDate = $_POST["expDate"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    // error handlers
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $home, $city, $state, $zip, $email, $certification,
        $dob, $recert, $phone, $payment, $expDate, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=pwdsdontmatch");
        exit();
    }

    if (emailExists($con, $email) !== false) {
        header("location: ../signup.php?error=emailalreadytaken");
        exit();
    }

    createUser($con,$name, $home, $city, $state, $zip, $email, $certification,
        $dob, $recert, $phone, $payment, $expDate, $pwd);

} else {
    header("location: ../signup.php");
    exit();
}