<?php

class pessoa{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    // public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
    //     $this->nome = $nome;
    //     $this->cpf = $cpf;
    //     $this->telefone = $telefone;
    //     $this->idade = $idade;
    //     $this->email = $email;
    //     $this->senha = $senha;
    // }

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setIdade($idade);
        $this->setEmail($email);
        $this->setSenha($senha);
    }


    // getter e setter para $nome
    public function getNome() {
        return $this->nome;
    }


    public function setNome($novoNome) {
        $this->nome = ucwords(strtolower($novoNome));
    }
    

    // getter e setter para $cpf
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($novoCpf) {
        $this->cpf = preg_replace('/\D/', '', $novoCpf);
    }


    // getter e setter para $telefone
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($novoTelefone) {
        $this->telefone = preg_replace('/\D/', '', $novoTelefone);
    }


    // getter e setter para $idade
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($novaIdade) {
        $this->idade = abs((int)$novaIdade,);   // abs: garante numero positivo
    }


    // getter e setter para $email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($novoEmail) {
        $this->email = (string)$novoEmail;
    }


    // getter e setter para $senha
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($novaSenha) {
        $this->senha = $novaSenha;
    }



    public static function criarViaTerminal() {
        $nome = readline("Digite o nome: ");
        $cpf = readline("Digite o CPF: ");
        $telefone = readline("Digite o telefone: ");
        $idade = readline("Digite a idade: ");
        $email = readline("Digite o email: ");
        $senha = readline("Digite a senha: ");

        return new self($nome, $cpf, $telefone, $idade, $email, $senha);
    }


    public function exibirInfo() {
        return "infromacões do usúario:\n Nome: $this->nome\n CPF: $this->cpf\n Telefone: $this->telefone\n Idade: $this->idade\n Email: $this->email\n Senha: $this->senha";  
    }
}


$pessoa2 = new pessoa("gaBriEL dE OLIveirA gOMeS", "123.123.123-12", "(19) 982443230", -17, "gabriel.o.gomes1@aluno.senai.sp", 1234);

$pessoa2 -> setNome("bRUNO alVEs");

echo $pessoa2 -> getNome();


$pessoa = pessoa::criarViaTerminal();
echo $pessoa2 -> exibirInfo();