<?php
$pdo = require_once '../config/connect.php';

$pdo->exec('CREATE table IF NOT EXISTS table1 (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
    )
    ');
