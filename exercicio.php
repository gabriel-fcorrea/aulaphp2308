<?php

    $nota1 = -2;
    $nota2 = 3;
    $nota3 = 5;
    $media = ($nota1 + $nota2 + $nota3)/3;
    $sit = "";
    $rec = 0;

    $media = number_format($media, 2, '.', '');
    $rec = number_format($rec, 2, '.', '');

    echo("A primeira nota registrada foi: " . $nota1);
    echo("<br><br>A segunda nota registrada foi: " . $nota2);
    echo("<br><br>A terceira nota registrada foi: " . $nota3);

    echo("<br><br><br>Para calcular a média final do aluno, o seguinte cálculo é feito: 
    <br><br>(Nota1 + Nota2 + Nota3)/3<br><br>");
    echo("<br><br>Quando a média final for menor do que 4,9 -> o aluno está de recuperação. <br> <br>
    Quando a média estiver entre 5,0 e 6,9 -> O aluno realizará a prova final. <br> <br>
    Quando a média for igual ou maior do que 7,0 -> O aluno foi aprovado pela média.<br> <br>");



        if ($nota1 < 0 || $nota2 < 0 || $nota3 < 0){
            echo("O valor inserido na nota é inválido.");
        }
          elseif ($media <= 4.9) {
            $sit = "Aluno em recuperação.";
            $rec = 10 - $media + 2;
            printf("<br><br>A média final do aluno é: " . $media . ". 
            <br><br>Situação acadêmica: " . $sit . " 
            <br><br>A nota necessária pra passar é: " . $rec);

        } elseif ($media <= 6.9) {
            $sit = "Aluno em prova final.";
            $rec = 10 - $media;
            printf("<br><br>A média final do aluno é: " . $media . ". 
            <br><br>Situação acadêmica: " . $sit . " 
            <br><br>A nota necessária pra passar é: " . $rec);
            

        } elseif ($media <=10) {
            echo("Aluno aprovado pela média.");

        } else {
            echo("Valor inválido.");
        }


?>