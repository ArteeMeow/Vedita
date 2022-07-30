<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=productsdb', 'root', '');
}
catch (PDOException $e) {
    echo "БД не подключена";
}
?>