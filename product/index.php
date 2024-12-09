<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Просмотр</h1>
<?php foreach ($products as $product): ?>
<span> id = <?= $product['id'] ?></span>
<span> name = <?= $product['name'] ?></span>
<span> article = <?= $product['article'] ?></span>
<br><br>
<?php endforeach; ?>
<a href="/product/create.php" id="create">Добавить</a>
</body>
</html>
