<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$datetime = $_POST['datetime'] ?? '';
$now = date('Y-m-d H:i:s');
$product_id = $_POST['product'];
$quantity = $_POST['quantity'];
$dateauto = $_POST['dateauto'] ?? 0;
if (!$datetime){
    $datetime = date('Y-m-d H:i:s');
}


$pdo->prepare("INSERT INTO receipts (datetime, product_id, quantity) VALUES (:datetime, :product_id, :quantity)")
    ->execute([
        'datetime' => $datetime,
        'product_id' => $product_id,
        'quantity' => $quantity,
    ]);

header('Location: /receipt/index.php');
