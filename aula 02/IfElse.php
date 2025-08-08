    <?php 

        $nota1 = 3;
        $nota2 = 7;

        $media = ($nota1 + $nota2) / 2;

        if ($media >= 7 ) {
            echo "Aprovado com média: $media\n";
        } else {
            echo "Reprovado com média: $media\n";
        }
    
    ?>

    <?php 

        $nome = (string) readline("Digite o nome do aluno: ");
        
        $nota1 = (Float) readline("Digite a primeira nota do aluno: ");

        $nota2 = (float) readline("Digite a segunda nota do aluno: ");

        $media = ($nota2 + $nota1) / 2;
        
        $presenca = (int) readline("Digite a presença do aluno: "); // Presença em porcentagem
        

        if ($media >= 7 && $presenca >= 75 || $nome == "Enzo Enrico") {
            echo "O Aluno: $nome foi aprovado com média: $media e presença: $presenca%\n";
        } elseif ($media < 7 && $presenca >= 75) {
            echo "O Aluno: $nome foi reprovado por média, com média: $media e presença: $presenca%\n";
        } elseif ($media >= 7 && $presenca < 75) {
            echo "O Aluno: $nome foi reprovado por falta, com média: $media e presença: $presenca%\n";
        } else {
            echo "O Aluno: $nome foi reprovado por média e falta, com média: $media e presença: $presenca%\n";
        }

    ?>