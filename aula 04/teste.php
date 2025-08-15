<?php

$escolha = (int) readline("Qual Carro você deseja saber se precisa de revisão (1-4): ");

switch ($escolha) {
    case 1:
        $modelo_carro1= "Versa";
        $marca_carro1="Nissan";
        $ano_carro1=2020;
        $revisao_carro1=true;
        $ndonos_carro1=2;

        $not = calcularValor($marca_carro1, $ano_carro1, $ndonos_carro1);
        Echo("$not");
        break;
    case 2:
        $modelo_carro2="M5";
        $marca_carro2="BMW";
        $ano_carro2=2018;
        $revisao_carro2=false;
        $ndonos_carro2=2;

        $not = calcularValor($marca_carro2, $ano_carro2, $ndonos_carro2);
        Echo("$not");
        break;
    case 3:
        $modelo_carro3="911";
        $marca_carro3="Porsche";
        $ano_carro3=2026;
        $revisao_carro3=false;
        $ndonos_carro3=1;

        $not = calcularValor($marca_carro3, $ano_carro3, $ndonos_carro3);
        Echo("$not");
    case 4:
        $modelo_carro4="Dolphin";
        $marca_carro4="BYD";
        $ano_carro4=2023;
        $revisao_carro4=false;
        $ndonos_carro4=1;

        $not = calcularValor($marca_carro4, $ano_carro4, $ndonos_carro4);
        Echo("$not");
        break;
    default:
        echo("ERRO! Digite um número válido.");
    }

function calcularValor($marca, $ano, $donos) {
    switch ($marca) {
        case "BMW":
        case "Porsche":
            $uso = date("Y") - $ano;
            $preco = (300000 - (300000 * (0.05 * $donos))) - (3000*$uso);
            echo("Os carros da $marca tem um preco estimado de $preco Após $uso Anos de uso.");
            break;
        case "Nissan":
            $uso = date("Y") - $ano;
            $preco = (70000 - (70000 * (0.05 * $donos))) - (3000*$uso);
            echo("Os carros da $marca tem um preco estimado de $preco Após $uso Anos de uso.");
            break;
        case "BYD":
            $uso = date("Y") - $ano;
            $preco = (150000 - (150000 * (0.05 * $donos))) - (3000*$uso);
            echo("Os carros da $marca tem um preco estimado de $preco Após $uso Anos de uso.");
            break;
        default:
            echo("ERRO!");
            break;
    }
}