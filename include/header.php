<?php
    session_start();
?>


<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>

<body>
<nav>
    <div class="logo">
        <h4>RADTECH's CEs</h4>
    </div>
    <ul class="nav-links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../signup.php">Sign Up</a></li>
        <li><a href="../login.php">Log In</a></li>
        <?php
            if (isset($_SESSION["usersEmail"])) {
                echo "<li><a href='../courses.php'>Courses</a></li>";
                echo "<li><a href='../shopping_cart.php'>Cart</a></li>";
                echo "<li><a href='../logout.php'>Log Out</a></li>";
                echo "<li><a href='../contact.php'>Contact Us</a></li>";
            }
        ?>
    </ul>
</nav>
<!-- header-->
