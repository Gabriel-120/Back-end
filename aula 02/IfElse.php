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

        $nota1 = 0;
        $nota2 = 0;
        $media = ($nota2 + $nota1) / 2;
        
        $presenca = 0; // Presença em porcentagem
        $nome = "Enzo Enrico";

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