<?php

// comentario de uma linha
/**
 * Comentario de multiplas linhas
 */
# tambem comenta uma linha

// declaração de variaveis basicas
$nome  = "Maycon";
$idade = 24;
$verdadeiroOuFalso = true; 
$verdadeiroOuFalso = false;
$saldoConta = 1.99;
// declaração de variaveis de arrays
$arrayDeInteiros = [1,2,3,4,5,6];
$arrayMisturado  = [1,1.44,"Uma string", 'A', 1];
$arrayVazio = [];


// estura de condição
if ($nome == "Maycon") {
    echo "O nome é igual";
} else if ($nome == "Nome") {
    echo "O nome é nome";
} else {
    # ....
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}


// estura de repetição
for ($i=0; $i < 10; $i++) { 
    # code...
}

while ($variavel) {

}

do {
    # code...
} while ($a <= 10);

// operadores matematicos

$n1 = 10;
$n2 = 20;

$n1 + $n2; // soma
$n1 - $n2; // subtração
$n1 * $n2; // multiplicação
$n1 / $n2; // divisão
$n1 % $n2; // modulo

// operadores booleanos
$varial = 1 || 2;
$varial = 1 or 2;

$varial = 1 && 2;
$varial = 1 and 2;

$varial = !true;


// entrada de dados
// na linha de comando
$nome = readline("Digite seu nome ?\n");

// saida de dados
// na linha de comando
echo "Imprime algo " . " alguma outra coisa" . $nomeVariavel;
print_r("qualquer");
var_dump("dasdads");