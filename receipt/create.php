<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$products = $pdo->query("SELECT * FROM products");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать поступление</title>
</head>
<body>
<h1>Создать поступление</h1>
<form action="/receipt/actions/store.php" method="post">
    <input type="datetime-local" name="datetime" id="datetime" placeholder="datetime" required>
    <select name="product" id="product" required>
        <?php foreach ($products as $product): ?>
        <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="number" name="quantity" id="quantity" placeholder="quantity" required>
    <input type="submit" id="btn">
</form>

</body>
</html>
