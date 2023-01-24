<?php
include __DIR__ . '/functions.php';
?>

<html>
<head>
    <title>Чётные и нечётные числа</title>
</head>
<body>
Число 2 <?= isEven(2) ? 'чётное' : 'нечётное' ?>
<br>
Число 5 <?= isEven(5) ? 'чётное' : 'нечётное' ?>
<br>
Число 8 <?= isEven(8) ? 'чётное' : 'нечётное' ?>
</body>
</html>