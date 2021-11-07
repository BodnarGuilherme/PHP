<?php

$nomeMinusculo = 'guilherme bodnar';
$nomeMaiusculo = 'GUILHERME BODNAR';

echo strtoupper($nomeMinusculo). PHP_EOL;
echo strtolower($nomeMaiusculo). PHP_EOL;
echo ucwords($nomeMinusculo)   . PHP_EOL;

$frase = 'AMARELO,VERDE,VERMELHO,PRETO,ROXO,ROSA,BRANCO'. PHP_EOL;
$palavrasSeparadas = explode(',', $frase);

print_r($palavrasSeparadas);
#echo $palavrasSeparadas;
var_dump($palavrasSeparadas);

$fraseSeparadaPorEspaco = implode(' ', $palavrasSeparadas);
echo $fraseSeparadaPorEspaco;

$frase2 = 'João está reprovando na disciplina de desenvolvimento de aplicações ' . PHP_EOL;
$fraseCorrigida = str_replace('reprovando','sendo aprovado', $frase2) . PHP_EOL;
echo $fraseCorrigida;