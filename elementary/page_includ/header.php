<?php
$header_content = require __DIR__ . '/header_content.php';
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
        <td colspan="2"><?= $header_content ?></td>
    </tr>
</table>
</body>
</html>