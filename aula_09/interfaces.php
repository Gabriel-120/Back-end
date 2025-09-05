<?php

// Modificadores de acesso:
    // existem 3 tipos:
        // public - pode ser acessado de qualquer lugar
        // private - só pode ser acessado dentro da própria classe. Utilizamos os getters e setters para acessa-los
        // protected - pode ser acessado dentro da própria classe e por classes que herdam dela


// pacotes: sintax logo no inicio do codigo, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele esta contido. exemplo:

// namespace aula 09;


// caso tenham mais arquivos que formam o BackEnd de uma pagina web e possuem a mesma raiz, o nomespace sera o mesmo.

namespace aula_09;

// Definição de uma interface
interface pagamento {
    public function pagar($valor);
}


class CartaoCredito implements pagamento {
    public function pagar($valor) {
        echo "Pagamento realizado com cartão de crédito no valor: R$ $valor";
    }
}

class pix implements pagamento {
    public function pagar($valor) {
    }
}


// exercicio 1 

interface forma {
    public function area();
}


class quadrado implements forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function area(){
        return $this->lado * $this->lado;
    }
}

class circulo implements forma {
    const pi = 3.14;
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function area() {
        return self::pi * ($this->raio * $this->raio);
    }
}


class pentagono implements forma{
    private $lado;
    private $apotemo;
    

    public function __construct($lado, $apotemo){
        $this->lado = $lado;
        $this->apotemo = $apotemo;
    }

    public function area(){
        $perimetro = $this->lado * 5;
        return ($perimetro * $this->apotemo) / 2;
    }
}

$quadrado = new quadrado(readline("Dite o valor de um dos lados do quadrado: "));
echo $quadrado->area();

$circulo = new circulo(readline("\n Digite o valor do raio do circulo: "));
echo $circulo->area();

$pentagono = new pentagono(readline("Digite o valor de um dos lados do pentagono: "), readline("Digite o lavor do apotemo do pentagono"));
echo $pentagono->area();