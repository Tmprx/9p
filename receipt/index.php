<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$receipts= $pdo->query("SELECT receipts.*, products.name as products_name FROM receipts LEFT JOIN products ON product_id = products.id")->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр поступлений</title>
</head>
<body>
<h1>Просмотр поступлений</h1>
<?php foreach ($receipts as $receipt): ?>
<span> id = <?= $receipt['id'] ?></span>
<span> name = <?= $receipt['datetime'] ?></span>
<span> product = <?= $receipt['products_name'] ?></span>
<span> quantity = <?= $receipt['quantity'] ?></span>
<br><br>
<?php endforeach; ?>
<a href="/receipt/create.php" id="create">Создать поступление</a>
</body>
</html>
