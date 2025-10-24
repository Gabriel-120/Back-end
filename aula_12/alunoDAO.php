<?php

// crud crete, read, update e delete
class alunoDao
{ //adao data access object
    private $alunos = []; // Array para armazenar temporáriamente os objetos e seus  atributos antes de mandar para o banco de dados. Foi criado inicialmente vazio[] ;

    private $arquivo = "alunos.json";

    public function __construct()
    {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);

            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $id => $info) {
                    $this->alunos[$id] = new Aluno(
                        $info['id'],
                        $info['nome'],
                        $info['curso']
                    );
                }
            }
        }
    }

    private function salvarEmArquivo()
    {
        $dados = [];

        foreach ($this->alunos as $id => $aluno) {
            $dados[$id] = [
                'id' => $aluno->getId(),
                'nome' => $aluno->getNome(),
                'curso' => $aluno->getCurso()
            ];
        }

        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }


    public function CriarAluno(Aluno $aluno)
    { // metodo create para criar um novo objeto
        $this->alunos[$aluno->getId()] = $aluno;
        $this->salvarEmArquivo();
    }

    public function lerAluno()
    {  // método read  para ler informações de um objeto já existente
        return $this->alunos;
    }

    public function atualizarAluno($id, $novoNome, $novoCurso)
    { //método update para atualizar as informações de um obejeto já existente
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
        $this->salvarEmArquivo();
    }

    public function excluirAluno($id){ 
        //método delete para excluir um objeto
        unset($this->alunos[$id]);
        $this->salvarEmArquivo();
    }
}