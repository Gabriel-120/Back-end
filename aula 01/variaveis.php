    <?php
        echo"Meu nome é Gabriel\n";
        print"Eu tenho 17 anos";
    ?>

    <?php
        $nome = "Gabriel";
        $idade = 17;
        echo "Meu nome é $nome e eu tenho $idade anos.";
    ?>

    <?php
         $num = 0;
         $num1 = 2.5;
         $str = strtoupper("olá mundo");

            echo $num . "\n";
            echo $num1 . "\n";
            print $str . "\n";

    ?>

    <?php
        echo "olá! \n";
        $nome = "Gabriel \n";
        $idade = "17";
        $ano_atual = "2025";

        $data_nasc = $ano_atual - $idade;
        echo $nome, "Você nasceu em: $data_nasc";
    ?>

    <?php
        // Solicita o nome
        $nome = readline("Digite seu nome: ");

        // Solicita a idade
        $idade = readline("Digite sua idade: ");

        // Exibe a mensagem
        echo "Olá, $nome! Você tem $idade anos.\n";
    ?> 

    <?php 
        
        $exerc2= "Programação em php";
        echo "\nMinúsculo: ", $exerc2;
        $exerc2 = strtoupper($exerc2);
        echo "\nMaiúsculo: ", $exerc2;
        $exerc2 = strtolower($exerc2);
        echo "\nMinúsculo novamente: ", $exerc2;
    
    ?>

    <?php 

        $exerc3 = "O PHP foi criado em mil novecentos e noventa e cinco";
        echo "\nAntes do comando replace: \n", $exerc3;
        $exerc3 = str_replace(['o','a','i'], ['0','4','1'], $exerc3);
        echo "\nApos o comando replace: \n", $exerc3;
    
    ?>