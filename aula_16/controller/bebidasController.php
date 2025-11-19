<?php
require_once __DIR__ . '/../Model/BebidasDAO.php';
require_once __DIR__ . '/../Model/Bebidas.php';

class BebidasController {
    private $dao;

    // Construtor: cria o objeto DAO (responsável por salvar/carregar)
    public function __construct() {
        $this->dao = new BebidasDAO();
    }

    // Lista todas as bebidas
    public function criar($nome, $categoria, $volume, $valor, $qtde) {

        // // Gera ID automaticamente com base no timestamp (exemplo simples)
        // $id = time(); // Função caso o objeto tenha um atributo de ID

        $bebida = new Bebidas( $nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebida($bebida);
    } 
    
    public function ler() {
        return $this->dao->lerBebidas();
    }
  
public function atualizar($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde) {
    $this->dao->atualizarBebida($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde);
}

public function buscarPorNome($nome) {
    return $this->dao->buscarPorNome($nome);
}
    // Exclui bebida
    public function deletar($nome) {
        $this->dao->excluirBebida($nome);
    }
}