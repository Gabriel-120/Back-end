<?php
namespace aula_15;

class Bebidas {
    private $nome;
    private $categoria;
    private $volume;
    private $valor;
    private $qtde;

    public function __construct($nome, $categoria, $volume, $valor, $qtde) {
        $this->nome = $nome; 
        $this->categoria = $categoria; 
        $this->volume = $volume; 
        $this->valor = $valor;
        $this->qtde = $qtde;
    }

    public function getNome() {
        return $this->nome;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVolume() {
        return $this->volume;
    }
    public function getValor() {
        return $this->valor;
    }
    public function getQtde() {
        return $this->qtde;
    }


    public function setNome($Nnome) {
        $this->nome = $Nnome;
    }

    public function setCategoria($Ncategoria) {
        $this->categoria = $Ncategoria;
    }

    public function setVolume($Nvolume) {
        $this->volume = $Nvolume;
    }

    public function setValor($Nvalor) {
        $this->valor = $Nvalor;
    }

    public function setQtde($Nqtde) {
        $this->qtde = $Nqtde;
    }
}