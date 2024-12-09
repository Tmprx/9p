<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$name = $_POST['name'];
$article = $_POST['article'];

$pdo->prepare("INSERT INTO products (name, article) VALUES (:name, :article)")
    ->execute([
        'name' => $name,
        'article' => $article,
    ]);

header('Location: /product/index.php');
