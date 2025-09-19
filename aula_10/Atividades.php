<?php

// Atividade 1
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

class retangulo implements forma {
    private $lado;
    private $base;

    public function __construct($lado, $base) {
        $this->lado = $lado;
        $this->base = $base;
    }

    public function area(){
        return $this->lado * $this->base;
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



// Atividade 2

interface animal {
    public function fazSom();
}


class cachorro1 implements animal {
    public function fazSom() {
        echo "O cachorro faz 'Au au!'";
    }
}

class gato implements animal {
    public function fazSom() {
        echo "O gato faz 'Miau!'";
    }
}

class vaca implements animal {
    public function fazSom() {
        echo "A vaca faz 'Muuu!'";
    }
}



// Atividade 3

interface transporte {
    public function mover();
}

class carro3 implements transporte {
    public function mover() {
        echo "O carro está andando na estrada.\n";
    }
}

class aviao1 implements transporte {
    public function mover() {
        echo "O avião está voando no céu.\n";
    }
}

class barco1 implements transporte {
    public function mover() {
        echo "O barco está navegando no mar.\n";
    }
}

class elevador1 implements transporte {
    
    public function mover() {
        echo "O Elevador está correndo pelo no prédio.\n";
    }
}



// Atividade 4

interface notificacao {
    public function enviar();
}

class email implements notificacao {
    public function enviar() {
        echo "Enviando email...\n";
    }
}

class sms implements notificacao {
    public function enviar() {
        return "Enviando SMS...\n";
    }
}

function notificar(object $meio) {
    if (method_exists($meio, 'enviar')){
        return $meio->enviar();
    } else {
        return "Método 'enviar' não encontrado no objeto fornecido\n";
    }
}



// Atividade 5

interface calculadora {
    public function somar();
}


class doisNumeros implements calculadora {
    private $num1;
    private $num2;

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function somar(){
        return $this->num1 + $this->num2;
    }
}


class tresNumeros implements calculadora {
    private $num1;
    private $num2;
    private $num3;

    public function __construct($num1, $num2, $num3) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
    }

    public function somar(){
        return $this->num1 + $this->num2 +  $this->num3;
    }
}



// Exercicio extra

interface movel {
    public function mover();
}

interface abastecivel{
    public function abastecer($quantidade);
}

interface  manutenivel {
    public function fazerManutencao();
}


class carro4 implements movel, abastecivel{

    public function mover() {
        return "O carro está se movendo.\n";
    }

    public function abastecer($quantidade){
        return "O carro foi abastecido com R$ $quantidade reais.\n";
    }
}

class bicicleta implements movel, manutenivel {
    public function mover(){
        return "A bicicleta está pedalando.\n";
    }

    public function fazerManutencao() {
        return "A bicicleta foi lubrificada.\n";
    }
}


class onibus implements movel, abastecivel, manutenivel {
    public function mover() {
        return "O ônibus está transportando passageiros.\n";
    }

    public function abastecer($quantidade) {
        return "O ônibus abasteceu R$ $quantidade reais.\n";
    }

    public function fazerManutencao() {
        return "O ônibus está passando por revisão.";
    }
}



// Objetos
$quadrado = new quadrado(5);
echo $quadrado->area();

$retangulo = new retangulo(5, 7);
echo $retangulo->area();

$circulo = new circulo(3);
echo $circulo->area();


// -------------------------
$cachorro = new cachorro1();
echo $cachorro->fazSom();

$gato = new gato();
echo $gato->fazSom();

$vaca = new vaca();
echo $vaca->fazSom();


// -------------------------
$carro = new carro3();
echo $carro-> mover();

$barco = new barco1();
echo $barco-> mover();

$aviao = new aviao1();
echo $aviao-> mover();

$elevador = new elevador1();
echo $elevador-> mover();


// -------------------------
$email = new email();
echo notificar($email);

$sms = new sms();
echo notificar($sms);

$teste = new aviao1();
echo notificar($teste);


// -------------------------
$dois = new doisNumeros(2, 4);
echo $dois->somar();

$tres = new tresNumeros(3, 4, 4);
echo $tres->somar();


// -------------------------
$carroExtra = new carro4();
echo $carroExtra->abastecer(30), $carroExtra->mover();      

$bicicleta = new bicicleta();
echo $bicicleta->mover(), $bicicleta->fazerManutencao();

$onibus = new onibus();
echo $onibus->mover(), $onibus->abastecer(150.50), $onibus->fazerManutencao();