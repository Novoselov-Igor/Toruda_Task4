<?php
$pdo = require_once './config/connect.php';

    $pdo->exec('TRUNCATE TABLE table1');
    $pdo->exec('TRUNCATE TABLE table2');

    $table1_data = [
        ['name' => 'Телевизор'],
        ['name' => 'Телефон'],
        ['name' => 'Часы'],
        ['name' => 'Машина'],
        ['name' => 'Планшет'],
    ];

    $stmt = $pdo->prepare('INSERT INTO table1 (name) VALUES (:name)');
    foreach ($table1_data as $row) {
        $stmt->execute($row);
    }

    $table2_data = [
        [100, 1000, 10000],
        [200, 2000, 20000],
        [300, 3000, 30000],
        [400, 4000, 40000],
        [500, 5000, 50000],
    ];

    $stmt = $pdo->prepare('INSERT INTO table2 (price1, price2, price3) VALUES (?, ?, ?)');
    foreach ($table2_data as $index => $row) {
        $stmt->execute($row);
    }
