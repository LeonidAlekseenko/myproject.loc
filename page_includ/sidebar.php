<?php
$content = include __DIR__ . '/content_sidebar.php';
$bar_content = include __DIR__ . '/bar_content.php';
?>

<html>
<head>
    <title>Заголовок страницы</title>
    <style>
        table, td {
            border: solid black 1px;
            border-collapse: collapse;
        }

        #layout {
            width: 800px;
            margin: auto;
        }

        #layout td {
            padding: 20px;
        }

        #sidebar {
            width: 300px
        }
    </style>
</head>
<body>
<table id="layout">
    <tr>
        <td id="sidebar"><?= $bar_content ?></td>
        <td><?= $content ?></td>
    </tr>
</table>
</body>
</html>