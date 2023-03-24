<?php
// Connect to database
include ('dbh.inc.php');
// Data check w 'submit'
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["passwd"];
    // Check for errors
    if(emptyInputlogIn($email, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    // Log in user
    loginUser($con, $email, $pwd);
} else {
    header("location: ../login.php");
    exit();
}
// Functions //
function emptyInputlogIn($email, $pwd): bool
{
    if(empty($email) || empty($pwd) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUser($con, $email,$pwd): void
{
    $emailExists = emailExists($con, $email);

    if($emailExists === false){
        header("location: ../login.php?error=wrongloginemail");
        exit();
    }
    $pwdHashed = $emailExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if($checkPwd === false) {
        header("location: ../login.php?error=incorrectpassword");
        exit();
    }  else if ($checkPwd === true) {
        // Start session
        session_start();
        $_SESSION["usersId"] = $emailExists["usersId"];
        $_SESSION["usersEmail"] = $emailExists["usersEmail"];
        header("location: ../index.php");
        exit();
    }
}
function emailExists($con, $email)
{
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    // Statement preparation/bind
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    // Prepared statement
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
