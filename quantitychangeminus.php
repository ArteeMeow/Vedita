<?php
require_once "db.php";
$data = [
    "PRODUCT_NAME" => $_POST['PRODUCT_NAME']
];

$query = "UPDATE `products` SET `PRODUCT_QUANTITY` = `PRODUCT_QUANTITY` - 1 WHERE PRODUCT_NAME = :PRODUCT_NAME";
$statement = $pdo->prepare($query);
$result = $statement->execute($data);
var_dump($result);
?>