<?php
require_once "CProducts.php";
$products = new CProducts;
print_r($products->query());
// в браузере выдает ошибку - The server requested authentication method unknown to the client [caching_sha2_password]
// решить не удалось
?>