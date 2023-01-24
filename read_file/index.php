<?php
$file = fopen(__DIR__ . '/text.txt', 'r');
for ($i = 0; $i < 4; $i++) {
    echo fgets($file);
    echo '<br>';
}
fclose($file);