<?php
//Connection to the server phpMyAdmin
$serverName = "localhost";
$username = "root";
$password = "root";
$database = "users_db";

$con = mysqli_connect($serverName, $username, $password, $database);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}