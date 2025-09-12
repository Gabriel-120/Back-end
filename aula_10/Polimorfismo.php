<?php
// Polimorfismo:

// O termo Polimorfismo significa "várias formas". Associando isso a Programação Orinetada a Objetos, o conceito se trata de varias classes e suas instancias(objetos) respondendo a um memso método de formas diferentes. No exemplo do Interface na aula_09, temos um método CalcularArea() que responde á classe Quadrado, á classe Pentagono e a classe Circulo. Isso quer dizer que a função é a mesma - Calcular a área de forma geometrica - mas a operacao muda de acordo com a figura.

// Crie um método chamado "mover()", aonde ele responde de varias fromas diferentes, para as classes: Carro, Avião, Barco e Elevador. Dica: Utilize interfaces.

interface movimento {
    public function mover();
}

class carro2 implements movimento {
    public function mover() {
        echo "O carro esta andando.\n";
    }
}

class aviao implements movimento {
    public function mover() {
        echo "O avião está voando.\n";
    }
}

class barco implements movimento {
    public function mover() {
        echo "O barco está navegado.\n";
    }
}

class elevador implements movimento {
    
    public function mover() {
        echo "O elevaor está subindo e depois ele irá descer.\n";
    }
}


$carro = new carro2();
echo $carro-> mover();

$carro1 = new carro2();
echo $carro1-> mover();


$barco = new barco();
echo $barco-> mover();

$barco1 = new barco();
echo $barco1-> mover();


$aviao = new aviao();
echo $aviao-> mover();

$aviao1 = new aviao();
echo $aviao1-> mover();


$elevador = new elevador();
echo $elevador-> mover();

$elevador1 = new elevador();
echo $elevador1-> mover();