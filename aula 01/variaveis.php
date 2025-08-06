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