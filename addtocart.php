<?php
session_start();
$product_id = $_GET['id'];  // Get the product ID from the query string

// Example: Add product to cart (session or database)
if(!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}
$_SESSION['cart'][] = $product_id;  // Add product to the cart session

header("Location: cart.html");
exit;
?>
