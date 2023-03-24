<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["mail"];     // from person
    $message = $_POST["message"];

    // Variables for mail function
    $mailTo = "joemilien2039@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    // mail function
    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../contact.php?error=mailsent");
}
