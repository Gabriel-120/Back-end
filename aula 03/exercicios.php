<?php 

// Exercícios de PHP
// 1 Verificação de idade

$idade = (int) readline("Digite sua idade: ");

if ($idade >= 18) {
    echo "Você é maior de idade.\n";
} else {
    echo "Você é menor de idade.\n";
}


// Classificação de nota

$nota = 5;

if ($nota >= 9 ) {
    echo("Excelente");
} elseif ($nota >= 7) {
    echo("Bom");
} else {
    echo("Reprovado");
}


// Dia da semana 

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


// Calculadora simples

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


// Contagem Progressiva

for ($I = 1; $I <= 10; $i++) {
    echo "Número: $i";
}


// Contagem Regressiva

$num = (int) readline("Digite um numero: ");
for ($I = $num; $I >= 1; $I--) {
    echo "Contagem Regressiva: $I";
}


// Números Pares

$num = (int) readline("Digite um numero final: ");

for ($I = 0; $I <= $num; $I+2) {
    echo "Número par da sequencia: $I";
}