<?php
$hello = require __DIR__ . '/admin.php';
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';
?>
<html>
<head>
    <title>Обработка POST-запроса</title>
</head>
<body>
<p>
    Переданный login: <?= $login ?>
    <br>
    Переданный password: <?= $password ?>

    <?php if ($login === 'admin' && $password === '123'): ?>
        <br>
            <span style="color: aquamarine;">
                <?= $hello . ' ' . $login ?>
            </span>
    <?php else: ?>
        <br>
            <span style="color: red;">
                <p>ERROR</p>
            </span>
    <?php endif; ?>
</p>
</body>
</html>