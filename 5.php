Используя только две переменные, поменяйте их значение местами.
Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2.
Дополнительные переменные использовать нельзя

<?php

$a = 1;
$b = 2;

$a = $a + $b; //3
$b = $a - $b; //1
$a = $a - $b; //2

echo "a = {$a}, b = {$b}";

