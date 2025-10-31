<?php
namespace Aula_12;

class ProdutoDAO
{
    private $produto = [];

    private $arquivo = "produto.json";

    public function __construct()
    {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);

            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $codigo => $info) {
                    $this->produto[$codigo] = new produto(
                        $info['codigo'],
                        $info['nome'],
                        $info['valor']
                    );
                }
            }
        }
    }

    private function salvarEmArquivo()
    {
        $dados = [];

        foreach ($this->produto as $codigo => $produto) {
            $dados[$codigo] = [
                'codigo' => $produto->getCodigo(),
                'nome' => $produto->getNome(),
                'valor' => $produto->getValor()
            ];
        }

        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function CriarProduto(Produto $produto)
    {
        $this->produto[$produto->getCodigo()] = $produto;
        $this->salvarEmArquivo();
    }

    public function lerProduto()
    {
        return $this->produto;
    }

    public function atualizarProduto($codigo, $Nnome, $Nvalor)
    {
        if (isset($this->produto[$codigo])) {
            $this->produto[$codigo]->setNome($Nnome);
            $this->produto[$codigo]->setValor($Nvalor);
        }
        $this->salvarEmArquivo();
    }

    public function excluirProduto($codigo)
    {
        unset($this->produto[$codigo]);
        $this->salvarEmArquivo();
    }
}
