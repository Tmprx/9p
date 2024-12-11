<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$receipts = $pdo->query("SELECT receipts.*, products.name as products_name FROM receipts LEFT JOIN products ON product_id = products.id")->fetchAll(PDO::FETCH_ASSOC);

$products_count = $pdo->query("SELECT products.name as name, SUM(receipts.quantity) as product_count FROM receipts LEFT JOIN products ON product_id = products.id GROUP BY receipts.product_id")->fetchAll(PDO::FETCH_ASSOC);
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

<h2>Общие поступлления</h2>

<table>
    <tr>
        <th>Товар</th>
        <th>Количество</th>
    </tr>
    <?php foreach ($products_count as $product_count): ?>
    <tr>
        <td><?= $product_count['name'] ?></td>
        <td><?= $product_count['product_count'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Все поступления</h2>

<?php foreach ($receipts as $receipt): ?>
<span> id = <?= $receipt['id'] ?></span>
<span> name = <?= $receipt['datetime'] ?></span>
<span> product = <?= $receipt['products_name'] ?></span>
<span> quantity = <?= $receipt['quantity'] ?></span>
<br><br>
<?php endforeach; ?>
<a href="/receipt/create.php" id="create">Создать поступление</a>
<a href="/index.php">Назад</a>
</body>
</html>
