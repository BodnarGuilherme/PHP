<?php

echo '----- Calc PHP----- '. PHP_EOL;
$n1 = readline('Digite o primeiro número: '. PHP_EOL);
$n2 = readline('Digite o segundo número: '. PHP_EOL);

#Tipos de comandos | echo | print_r() | var_dump() \;

print_r($n1);
var_dump($n1, $n2);
echo PHP_EOL . 'Resultados: ' . PHP_EOL;
echo 'Soma: '           . $n1 + $n2 . PHP_EOL;
echo 'Subtração: '      . $n1 - $n2 . PHP_EOL;
echo 'Multiplicação : ' . $n1 * $n2 . PHP_EOL;
echo 'Divisão: '        . $n1 / $n2 . PHP_EOL;
echo 'Resto d divisão: '. $n1 % $n2 . PHP_EOL;  