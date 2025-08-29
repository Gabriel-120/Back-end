<?php

class veiculos{
    private $marca;
    private $modelo;
    private $ano;
    private $n_dono;


    public function __construct($marca, $modelo, $ano, $n_dono){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->n_dono = $n_dono;
    }
}

class carro1 extends veiculos{
    
}


class moto1 extends veiculos {

}