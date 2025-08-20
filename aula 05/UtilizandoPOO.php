<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_Donos;


    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this ->marca = $marca;
        $this ->modelo = $modelo;
        $this ->ano = $ano;
        $this ->revisao = $revisao;
        $this ->N_Donos = $N_Donos;
    }
}

$carro1 = new Carro("Porsche", "911", "2020", false, 3);
$carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1);

// Exercicio: Criando novos objetos Carro
$carro3 = new Carro("Chevrolet", "Impala", 1967, false, 1);
$carro4 = new Carro("Ford", "Mustang", 1965, true, 2);
$carro5 = new Carro("Lamborghini", "Aventador S", 2022, false, 3);
$carro6 = new Carro("Toyota", "Supra-MK4", 2002, false, 2);