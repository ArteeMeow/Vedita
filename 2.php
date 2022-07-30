<?php
if (isset($_POST["number"]))
    $number = $_POST["number"];
require_once "db.php";
$products = array();
$query = "SELECT PRODUCT_NAME FROM products WHERE PRODUCT_ID <= ?";
$prepare = $pdo->prepare($query);
$prepare->execute([$number]);
while($fetch = $prepare->fetch(PDO::FETCH_ASSOC))
    array_push($products, $fetch['PRODUCT_NAME']);
print_r($products);
?>
