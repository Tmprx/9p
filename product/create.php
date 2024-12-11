<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить товар</title>
</head>
<body>
<h1>Добавить товар</h1>
<form action="/product/actions/store.php" method="post">
    <input type="text" name="name" id="name" placeholder="name">
    <input type="number" name="price" id="price" placeholder="price">
    <input type="text" name="article" id="article" placeholder="article">
    <input type="submit" id="submit">
</form>
<a href="/product/index.php">Назад</a>

</body>
</html>
