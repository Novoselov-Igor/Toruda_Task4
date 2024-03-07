<?php 
$pdo = require_once './config/connect.php';

$data = $pdo->prepare('SELECT t1.name, t2.price2 
FROM table1 t1
JOIN table2 t2 ON t1.product_id = t2.product_id
WHERE t2.price2 = 2000');

$data->execute();

$data = $data->fetchAll();

return $data;