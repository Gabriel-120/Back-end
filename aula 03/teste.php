<?php 
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