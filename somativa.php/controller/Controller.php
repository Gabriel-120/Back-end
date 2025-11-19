<?php 
require_once __DIR__ . '/../model/Livros.php';
require_once __DIR__ . '/../model/LivrosDAO.php';

class LivrosController {
    private $dao;

    public function __construct() {
        $this->dao = new LivrosDAO();
    }

    public function criar($titulo, $autor, $ano, $genero, $quantidade) {
        $livros = new Livros($titulo, $autor, $ano, $genero, $quantidade);
        $this->dao->criarLivros($livros);
    }

    public function ler() {
        return $this->dao->lerLivros();
    }

    public function atualizar($tituloOriginal, $N_titulo, $N_autor, $N_ano, $N_genero, $N_quantidade) {
        $this->dao->atualizarLivros($tituloOriginal, $N_titulo, $N_autor, $N_ano, $N_genero, $N_quantidade);
    }

    public function buscarPorTitulo($titulo) {
        $this->dao->bsucarPorTitulo($titulo);
    }

    public function deletar($titulo) {
        $this->dao->excluirLivros($titulo);
    }
}