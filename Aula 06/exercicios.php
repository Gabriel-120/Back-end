<?php 

class produto{
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;
}


$bolacha1 = new produto();
$bolacha1 ->nome = "Nikito";
$bolacha1 ->categoria = "Doces";
$bolacha1 ->fornecedor = "Vitarella";
$bolacha1 ->qtde_estoque = 220;


$feijao1 = new produto();
$feijao1 ->nome = "Oliron";
$feijao1 ->categoria = "Mantimentos";
$feijao1 ->fornecedor = "Reserva nobre";
$feijao1 ->qtde_estoque = 123;


$arroz1 = new produto();
$arroz1 ->nome = "Prato fino";
$arroz1 ->categoria = "Mantimentos";
$arroz1 ->fornecedor = "PIRAHY Alimentos";
$arroz1 ->qtde_estoque = 100;