<?php
namespace aula_15;

require_once __DIR__ . '/../model/bebidas.php';
require_once __DIR__ . '/../model/bebidasDAO.php';

class BebidasController {
    private $dao;

    public function __construct() {
        $this->dao = new bebidasDAO();
    }

    public function ler() {
        return $this->dao->lerBebidas();
    }

    public function criar($nome, $categoria, $volume, $valor, $qtde) {
        $bebidas = new Bebidas($nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebidas($bebidas);
    }

    public function atualizar($nome, $categoria, $volume, $valor, $qtde) {
        $this->dao->atualizarBebidas($nome, $categoria, $volume, $valor, $qtde);
    }

    public function deletar($nome) {
        $this->dao->excluirBebidas($nome);
    }
}