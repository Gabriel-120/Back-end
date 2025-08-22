<?php
class produtos {
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }

    public function produto_vendido($qtde_vendida) {
        $qtde_estoque = $this->qtde_estoque - $qtde_vendida;
        return $qtde_estoque;
    }
}

$bolacha1 = new produtos("Nikito", "Doces", "Vitarella", 220);
// $bolacha1 = new produtos();
// $bolacha1 ->nome = "Nikito";
// $bolacha1 ->categoria = "Doces";
// $bolacha1 ->fornecedor = "Vitarella";
// $bolacha1 ->qtde_estoque = 220;

$feijao1 = new produtos("Oliron", "Mantimento", "Reserva nobre", 123);
// $feijao1 = new produtos();
// $feijao1 ->nome = "Oliron";
// $feijao1 ->categoria = "Mantimentos";
// $feijao1 ->fornecedor = "Reserva nobre";
// $feijao1 ->qtde_estoque = 123;


$bolacha1 ->produto_vendido(9);
$feijao1 ->produto_vendido(15);



$not = $bolacha1 ->produto_vendido(9);
echo("$not");