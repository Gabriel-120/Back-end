<?php
namespace aula_14;

class Produto {
    private $codigo;
    private $nome;
    private $valor;

    public function __construct($codigo, $nome, $valor) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function setCodigo($codigo) {
        $this->codigo=$codigo;
    }
    public function setNome($nome) {
        $this->nome=$nome;
    }
    public function setValor($valor) {
        $this->valor=$valor;
    }

    public function getCodigo() {
        return $this->codigo;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getValor() {
        return $this->valor;
    }
}