<?php 

// Exercício 1 - Criação básica
class carro{
    private $marca1;
    private $modelo1;

    public function __construct($marca1, $modelo1){
        $this->marca1 = $marca1;
        $this->modelo1 = $modelo1;
    }

    public function getMarca1(){
        return $this->marca1;
    }

    public function setMarca1($novaMarca){
        return $this->marca1 = $novaMarca;
    }


    public function getModelo1(){
        return $this->modelo1;
    }

    public function setModelo1($novoModelo){
        return $this->modelo1 = $novoModelo;
    }
}

$carro1 = new carro("BMW", "M4");

$carro1->getMarca1();
$carro1->getModelo1();
$carro1->setMarca1("Ferrari");
$carro1->setModelo1("Purosangue");



// Exercício 2 - Pessoa com atributos

class pessoa{
    private $nome1;
    private $idade1;
    private $email1;

    public function __construct($nome1, $idade1, $email1) {
        $this->nome1 = $nome1;
        $this->idade1 = $idade1;
        $this->email1 = $email1;
    }

    public static function criarSamuel() {
        $nome1 = readline("Digite seu nome: ");
        $idade1 = readline("Digite a idade: ");
        $email1 = readline("Digite o email: ");

        return new self($nome1, $idade1, $email1);
    }

    public function exibir_info() {
        return "O nome é $this->nome1, tem $this->idade1 anos e o email é $this->email1.";
    }
}

$samuel = pessoa::criarSamuel();
echo $samuel -> exibir_info();



// Exercício 3 - Validação em setter

class aluno{
    private $nome;
    Private $nota;

    public function __construct($nome, $nota){
        $this->nome = $nome;
        $this->setNota($nota);
    }

    public function getNota(){
        return $this->nota;
    }

    public function setNota($nota1){
        if ($nota1 >= 0 && $nota1 <= 10) {
            return $this->nota = $nota1;
        } else {
            return $this->nota = 0;
        }
    }
}

$aluno1 = new aluno("Gomes", 10);
Echo $aluno1 -> getNota();



// Exercício 4 - Encapsulamento de Produto 

class produto{
    private $nome1;
    private $preco;
    private $estoque;


    public function __construct($nome1, $preco, $estoque){
        $this->nome1 = $nome1;
        $this->setPreco($preco);
        $this->setEstoque($estoque);
    }

    public function exibirInfo() {
        return "O produto $this->nome1 custa R$$this->preco reais e tem $this->estoque unidades no estoque.";
    }

    public function setNome1($novoNome1) {
        return $this->nome1 = $novoNome1;
    }

    public function setPreco($novoPreco) {
        return $this->preco = abs($novoPreco);
    }

    public function setEstoque($novoEstoque){
        return $this->estoque = abs($novoEstoque);
    }
}

$produto1 = new produto("Pão", -1.5, -10 );
echo $produto1 -> exibirInfo();



// Exercício 5 - Alteração de dados

class funcionarios{
    private $nome;
    private $salario;


    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function exibirInfo() {
        return "O funcionario $this->nome recebe R$$this->salario reais.";
    }


    public function setNome($novoNome){
        return $this->nome = $novoNome;
    }

    public function setSalario($novoSalario) {
        return $this->salario = abs($novoSalario);
    }
}

$func1 = new funcionarios("Rogerio", 1585.65);
$func1 -> setNome("Samuel");
$func1 -> setSalario(10000);

echo $func1 -> exibirInfo();