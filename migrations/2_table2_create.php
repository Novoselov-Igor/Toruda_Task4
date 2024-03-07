<?php
$pdo = require_once '../config/connect.php';

$pdo->exec('CREATE table IF NOT EXISTS table2 (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    price1 int NOT NULL,
    price2 int NOT NULL,
    price3 int NOT NULL
    )');