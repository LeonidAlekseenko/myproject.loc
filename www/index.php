<?php
function myAutoLoader(string $className)
{
    require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register('myAutoLoader');

$author = new \MyProject\Models\Users\User('Иван');
$article = new \MyProject\Models\Articles\Article('Заголовок', 'Текст', $author);
var_dump($article);
