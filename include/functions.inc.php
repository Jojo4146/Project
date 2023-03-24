<?php
function emptyInputSignup($name, $home, $city, $state, $zip, $email, $certification,
    $dob, $recert, $phone, $payment, $expDate, $pwd, $pwdRepeat): bool
{
    if(empty($name) || empty($home)|| empty($city)|| empty($state)|| empty($zip)
        || empty($email)|| empty($certification)|| empty($dob)|| empty($recert)
        || empty($phone)|| empty($payment)|| empty($expDate)|| empty($pwd)|| empty($pwdRepeat)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email): bool
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat): bool
{
    if($pwd !== $pwdRepeat){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emailExists($con, $email){
    // check given email against database
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    // Check that email is not repeated in database
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($con,$name, $home, $city, $state, $zip, $email, $certification,
    $dob, $recert, $phone, $payment, $expDate, $pwd){
    // check given email against database
    $sql = "INSERT INTO users (usersName, usersAddress, usersCity, usersState, usersZip, usersEmail,
                   usersPrimCert, usersDOB, usersRecert, usersPhone, usersPayMethod, usersExpD, usersPwd) 
            VALUES (?, ?, ?, ?, ?, ?,? ,? ,? ,? ,? ,? ,? );";
    if ($con->query($sql)) {
        echo "Data saved successfully.";
    } else {
        echo "Data not saved into table.";
    }

    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed2");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssssssss", $name, $home, $city, $state, $zip, $email, $certification,
        $dob, $recert, $phone, $payment, $expDate, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=noerrors");
    exit();
}
