<?php 

// Exercícios de PHP
// 1 Verificação de idade

$idade = (int) readline("Digite sua idade: ");

if ($idade >= 18) {
    echo "Você é maior de idade.\n";
} else {
    echo "Você é menor de idade.\n";
}



// 2 Classificação de nota

$nota = 5;

if ($nota >= 9 ) {
    echo("Excelente");
} elseif ($nota >= 7) {
    echo("Bom");
} else {
    echo("Reprovado");
}



// 3 Dia da semana 

$dia = (int) readline("Digite um numero (1-7)");

switch ($dia){
    case 1:
        echo("Domingo");
        break;
    case 2:
        echo("Segunda");
        break;
    case 3:
        echo("Terça");
        break;
    case 4:
        echo("Quarta");
        break;
    case 5:
        echo("Quinta");
        break;
    case 6:
        echo("Sexta");
        break;
    case 7:
        echo("Sabado");
        break;
    default:
        echo("Dia não reconhecido");
        break;
}



// 4 Calculadora simples

$num1 = (int) readline("Digite o primeiro numero para ser calculado: ");
$num2 = (int) readline("Digite o segundo numero para ser calculado");
$operacao = readline("Digite qual operação deseja fazer (+, -, *, /)");

switch ($operacao) {
    case "+":
        echo("A operacao deu: "($num1 + $num2));
        break;
    case "-":
        echo("A operação deu: " ($num1 - $num2));
        break;
    case "*":
        echo("A sua operação deu: " ($num1 * $num2));
        break;
    case "/":
        echo("A sua operacao deu: " ($num1 / $num2));
        break;
    default:
        echo("ERRO, Tente Novamente");
        break;
}



// 5 Contagem Progressiva

for ($I = 1; $I <= 10; $i++) {
    echo("Número: $i \n");
}



// 6 Contagem Regressiva

$num = (int) readline("Digite um numero: ");
for ($I = $num; $I >= 1; $I--) {
    echo "Contagem Regressiva: $I \n";
}




// 7 Números Pares

$num = (int) readline("Digite um numero final: ");
echo("Números pares da sequência: \n");

for ($I = 0; $I <= $num; $I += 2) {
    echo("$I \n");
}



//  8 Tabuada

$num = (int) readline("Digite um Número (minímo 1): ");
echo("A tabuada do $num é: \n");

for ($I = 1; $I <= 10; $I++) {

    $tabuada = $num * $I;
    
    echo("$I X $num = $tabuada \n");
}



// 9 Classificação de Temperatura

$temp = (int) readline("Digite a temperatura da sua cidade: ");

if ($temp <= 15 ) {
    echo("Hoje esta frio.");
} elseif ($temp > 15 && $temp < 25 ) {
   echo("Hoje o dia esta gradável.");
} else {
    echo("Hoje o dia esta quente.");
}



// 10 Menu Interativo

for ($I = 0; $I <= 5; $I++) {
$menu = (int) readline("Digite um Número (1-3):\n 1 para Olá\n 2 para Data Atual\n 3 para sair");

switch ($menu) {
    case 1:
        echo("Olá\n");
        break;
    case 2:
        echo date("d/n/y \n");
        break;
    case 3:
        $I = 6;
        break;
    default:
     echo("ERRO: Digite um número valido.");
     break;
}}



// Exercício Extra

$valor1 = readline("Digite algo\n");
$valor2 = readline("Digite algo\n");

if (is_Int($valor1) && is_int($valor2)) {
    echo("Os dois valores são uma variavel Int");
} elseif (is_int($valor1) && is_float($valor2)) {
    echo("O valor 1 é uma variavel Int e o valor 2 é uma variavel Float");
} elseif (is_float($valor1) && is_int($valor2)) {
    echo("O valor 1 é uma variavel Float e o valor 2 uma variavel Int");
} elseif (is_string($valor1) && is_string($valor2)) {
    echo("Os dois valores são uma variavel String");
} elseif (is_string($valor1) && is_float($valor2)) {
    echo("O valor 1 é uma variavel String e o valor 2 é uma variavel Float");
} elseif (is_float($valor1) && is_string($valor2)) {
    echo("O valor 1 é uma variavel Float e o valor 2 é uma String");
} elseif (is_float($valor1) && is_float($valor2)) {
    echo("Os dois valores são uma variavel Float");
} elseif (is_string($valor1) && is_int($valor2)){
    echo("O valor 1 é uma variavel String e o valor 2 é uma variavel Int");
} else {
    echo("o valor 1 é uma variavel Int e o valor 2 é uma variavel String");
}