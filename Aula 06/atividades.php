<?php 


// Exercicio 1 - Crie uma classe "Moto" com ao menos 4 atributos sem a utilização de um construtor.
class moto {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
}

// Exercicio 2 - Crie ao menos 3 objetos para essa classe

$moto1 = new moto();
$moto1 ->marca = "Honda";
$moto1 ->modelo = "CG 160";
$moto1 ->ano = 2016;
$moto1 ->cor = "Preto";


$moto2 = new moto();
$moto2 ->marca = "Yamaha";
$moto2 ->modelo = "XTZ 250 Lander";
$moto2 ->ano = 2007;
$moto2 ->cor = "Branco";

$moto3 = new moto();
$moto3 ->marca = "BMW";
$moto3 ->modelo = "R 1300 GS";
$moto3 ->ano = 2024;
$moto3 ->cor = "Vermelho";


// Exercicio 3 - Crie 3 construtores sendo:

// 1° Construtor: Recebe 3 parâmetros sendo eles $dia, $mes e $ano;

    // public function __construct($dia, $mes, $ano) {
    //     $this->dia = $dia;
    //     $this->mes = $mes;
    //     $this->ano = $ano;
    // }


// 2° Construtor: Recebe 7 parâmetros sendo eles: $nome, $idade, $cpf, $telefone, $endereco, $estado_civil e $sexo;

    // public function __construct($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo){
    //     $this->nome = $nome; 
    //     $this->idade = $idade;
    //     $this->cpf = $cpf;
    //     $this->telefone = $telefone;
    //     $this->endereco = $endereco;
    //     $this->estado_civil = $estado_civil;
    //     $this->sexo = $sexo;
    // }


// 3° Construtor: Recebe 5 parâmetros sendo eles: $marca, $nome, $categoria, $data_fabricacao e $data_venda;

    // public function __construct($marca, $nome, $categoria, $data_fabricacao, $data_venda){
    //     $this->marca = $marca;
    //     $this->nome = $nome;
    //     $this->categoria = $categoria;
    //     $this->data_fabricacao = $data_fabricacao;
    //     $this->data_venda = $data_venda;
    // }