<?php
require_once "db.php";
$data = [
    "PRODUCT_NAME" => $_POST['PRODUCT_NAME']
];

$query = "UPDATE `products` SET `hide`= 1 WHERE PRODUCT_NAME = :PRODUCT_NAME";
$statement = $pdo->prepare($query);
$result = $statement->execute($data);
var_dump($result);
?>




