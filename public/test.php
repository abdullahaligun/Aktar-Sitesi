<?php
$page = $_GET['page'] ?? 1;
include 'POST/API.php';
$products = RandomProductQuery(4);
print_r($products);
echo '<p>#'.$products.'#</p>';
