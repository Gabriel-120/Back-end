<?php
// 
require_once "crud.php";
require_once "alunoDAO.php";

// Objetos da class AlunoDAO para gerenciar os métodos do CRUD
$dao = new alunoDao();


// CREATE
$dao-> CriarAluno(new aluno(1, "Maria", "Design"));
$dao-> CriarAluno(new aluno(2, "Gabriel", "Moda"));
$dao-> CriarAluno(new aluno(3, "Eduardo", "Manicure"));

// Crie mais 6 objetos obedecendo a seguinte lista 
$dao-> CriarAluno(new aluno(4, "Aurora", "Arquitetura"));
$dao-> CriarAluno(new aluno(5, "Oliver", "Diretor"));
$dao-> CriarAluno(new aluno(6, "Amanda", "Lutadora"));
$dao-> CriarAluno(new aluno(7, "Geysa", "Engenharia"));
$dao-> CriarAluno(new aluno(8, "Joab", "Professor"));
$dao-> CriarAluno(new aluno(9, "Bernardo", "Streamer"));


// READ
echo "\n Listagem Inicial: \n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}


// UPDATE
$dao->atualizarAluno(3, "Viviane", "Eletricista");

// Faça as seguintes atualizações:
$dao->atualizarAluno(7, "Clotilde", "Engenheira");
$dao->atualizarAluno(8, "Joana", "Professora");
$dao->atualizarAluno(9, "Bernardo", "Dev");
$dao->atualizarAluno(6, "Amanda", "Logistica");
$dao->atualizarAluno(5, "Oliver", "Eletrica");

echo "\n Após Atualização: \n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}


// DELETE
$dao->excluirAluno(2);

// delete a Clotilde e a Aurora
$dao->excluirAluno(7);
$dao->excluirAluno(4);

echo "\n Após exclusão: \n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}