<?php
namespace aula_15;

class bebidasDAO {
    private $bebidas = [];

    private $arquivo = "bebidas.json";

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);

            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $nome => $info) {
                    $this->bebidas[$nome] = new Bebidas(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }

    private function salvarEmArquivo() {
        $dados = [];

        foreach ($this->bebidas as $nome => $bebidas) {
            $dados[$nome] = [
                'nome' => $bebidas->getNome(),
                'categoria' => $bebidas->getCategoria(),
                'volume' => $bebidas->getVolume(),
                'valor' => $bebidas->getValor(),
                'qtde' => $bebidas->getQtde()
            ];
        }
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }


    public function CriarBebidas(Bebidas $bebidas) {
        $this->bebidas[$bebidas->getNome()] = $bebidas;
        $this->salvarEmArquivo();
    }

    public function atualizarBebidas($nome, $Ncategoria, $Nvolume, $Nvalor, $Nqtde) {
        if (isset($this->bebidas[$nome])) {
            $this->bebidas[$nome]->setCategoria($Ncategoria);
            $this->bebidas[$nome]->setVolume($Nvolume);
            $this->bebidas[$nome]->setValor($Nvalor);
            $this->bebidas[$nome]->setQtde($Nqtde);
        }
        $this->salvarEmArquivo();
    }

    public function excluirBebidas($nome) {
        unset($this->bebidas[$nome]);
        $this->salvarEmArquivo();
    }

    public function lerBebidas() {
        return $this->bebidas;
    }
}
