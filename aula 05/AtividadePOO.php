<?php


// Exercício 1:
// Crie uma classe (molde de objetos) chamada 'Cachorro' com os seguintes atributos: Nome, idade, raça, castrado e sexo.

class Cachorro {
    public $nome;
    public $raca;
    public $idade;
    public $sexo;
    public $castrado;

    public function __construct($nome, $raca, $idade, $sexo, $castrado) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->castrado = $castrado;
    }

    public function latir() {
        echo "O chachorro $this->nome está latindo!";
    }

    public function marcandoTerritorio() {
        echo "O cachorro $this->nome da raça $this->raca está marcando território.";
    }
}


// Exercício 2:
// Após a criação da classe do exercício 1, crie 10 cachorros (10 objetos).

$dog1 = new Cachorro("Rex", "Labrador", 5, "Macho", true);
$dog2 = new Cachorro("Bella", "Poodle", 3, "Fêmea", false);
$dog3 = new Cachorro("Max", "Bulldog", 4, "Macho", true);
$dog4 = new Cachorro("Luna", "Beagle", 2, "Fêmea", false);
$dog5 = new Cachorro("Charlie", "Golden Retriever", 6, "Macho", true);
$dog6 = new Cachorro("Molly", "Shih Tzu", 1, "Fêmea", false);
$dog7 = new Cachorro("Rocky", "Boxer", 3, "Macho", true);
$dog8 = new Cachorro("Daisy", "Cocker Spaniel", 2, "Fêmea", false);
$dog9 = new Cachorro("Buddy", "Dachshund", 4, "Macho", true);
$dog10 = new Cachorro("Sadie", "Schnauzer", 5, "Fêmea", false);



// Exercício 3:
// Após a conclusão dos exercícios 1 e 2, crie uma classe chamada 'Usuario' com os atributos: Nome, CPF, Sexo, Email, Estado civil, Cidade, Estado, Endereco e CEP.

class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estado_civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;

    public function __construct($nome, $cpf, $sexo, $email, $estado_civil, $cidade, $estado, $endereco, $cep) {
    $this ->nome = $nome;
    $this ->cpf = $cpf;
    $this ->sexo = $sexo;
    $this ->email = $email;
    $this ->estado_civil = $estado_civil;
    $this ->cidade = $cidade;
    $this ->estado = $estado;
    $this ->endereco = $endereco;
    $this ->cep = $cep;
    }


    // Reservista
    public function testandoReservista() {
        if ($this->sexo == "Masculino") {
            echo "Apresente seu certificado de reservista do tiro de guerra!";
        } else {
            echo "Tudo certo";
        }
    }


    // Casados
    public function casado($anos_casados) {
        if ($this->estado_civil == "Casado") {
            echo "Parabens pelo seu casamento de $anos_casados anos!";
        } else {
            echo "Oloko";
        }
    }
}



// Exercício 4:
// Crie 3 objetos utilizando a classe do exercício 3, seguindo as seguintes informações:

$Usuario1 = new Usuario("Josenildo Afonso Souza", "100.200.300-40", "Masculino", "josenewdo.souza@gmail.com", "Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-98");

$Usuario2 = new Usuario("Valentina Passos Scherrer", "070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24");

$Usuario3 = new Usuario("Claudio Braz Nepumoceno", "575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99");

$Usuario1 -> casado(9);