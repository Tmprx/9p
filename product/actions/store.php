<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];

$pdo->prepare("INSERT INTO products (name, price, article) VALUES (:name, :price, :article)")
    ->execute([
        'name' => $name,
        'price' => $price,
        'article' => $article,
    ]);

header('Location: /product/index.php');
