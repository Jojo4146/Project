<?php
// Name of the page
$page_title = 'Cart Additions';
include_once 'include/header.php';

if (empty($_SESSION['cart'])) {
$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<h2>A course was added to your cart.</h2>