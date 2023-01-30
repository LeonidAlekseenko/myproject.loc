<?php
$article = [
    'title' => 'Название статьи',
    'text' => 'Текст статьи',
    'author' => 'Автор статьи'
];
?>
<html>
<head>
    <title><?= $article['title'] ?></title>
</head>
<body>
<h1><?= $article['title'] ?></h1>
<p><?= $article['text'] ?></p>
<p><?= $article['author'] ?></p>
</body>
</html>
