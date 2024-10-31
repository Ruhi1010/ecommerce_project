<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='joggers' LIMIT 4");

$stmt->execute();

$shoes_joggers_products = $stmt->get_result();


?>