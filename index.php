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
<?php require_once 'calculate.php'; ?>
<form action="" method="post">
    <input type="number" name="first" placeholder="Введите первое число" required>
    <select name="action" id="action">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
    <input type="number" name="second" placeholder="Введите второе число" required>
    <input type="submit" name="submit" value="Посчитать">
</form>
<h2>Результат: <?= $result; ?></h2>
</body>
</html>
