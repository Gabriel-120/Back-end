<?php
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