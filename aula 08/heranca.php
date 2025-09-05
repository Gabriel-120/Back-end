<?php

class imovel{
    private $categoria;
    private $N_comodos;
    private $valor;
    private $estado_conservacao;


    public function __construct($categoria, $N_comodos, $valor, $estado_conservacao){
        $this->categoria = $categoria;
        $this->N_comodos = $N_comodos;
        $this->valor = $valor;
        $this->estado_conservacao = $estado_conservacao;
    }
}

class casa extends imovel{
    private $tem_quintal;

    public function __construct($categoria, $N_comodos, $valor, $estado_conservacao, $tem_quintal){
        parent::__construct($categoria, $N_comodos, $valor, $estado_conservacao);
        $this->tem_quintal = $tem_quintal;
    }
}


class apartamento extends imovel{
    private $andar;

    public function __construct($categoria, $N_comodos, $valor, $estado_conservacao, $andar){
        parent::__construct($categoria, $N_comodos, $valor, $estado_conservacao);
        $this->andar = $andar;
    }
}


class escola extends imovel{
    private $seguimento;

    public function __construct($categoria, $N_comodos, $valor, $estado_conservacao, $seguimento){
        parent::__construct($categoria, $N_comodos, $valor, $estado_conservacao);
        $this->seguimento = $seguimento;
    }
}


class comercio extends imovel{
    private $tamanho;

    public function __construct($categoria, $N_comodos, $valor, $estado_conservacao, $tamanho){
        parent::__construct($categoria, $N_comodos, $valor, $estado_conservacao);
        $this->tamanho = $tamanho;
    }
}