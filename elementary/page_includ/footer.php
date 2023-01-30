<?php
$footer = require __DIR__ . '/footer_content.php'
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
        <td colspan="2"><?= $footer ?></td>
    </tr>
</table>
</body>
</html>