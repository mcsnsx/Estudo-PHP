<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "OPERADORES MATEMÁTICOS<br>";

echo"<br>";

// soma dentro de uma variável
$soma = 1 + 1;
echo $soma;

echo"<br>";

// soma direta sem variáveis
echo 1 + 1 * 3;

echo"<br>";

//soma direta sem variaveis -> lê primeiro os parenteses assim como na matematica..
echo (1 + 1) * 3;

echo"<br>";
echo"<br>";

echo "EXEMPLO<br>";

echo"<br>";

//Operadores
$adicao = 2 + 5;
echo $adicao;

echo"<br>";

$subtracao = 5 - 2;
echo $subtracao;

echo"<br>";

$multiplicacao = 5 * 2;
echo $multiplicacao;

echo"<br>";

$divisao = 5 / 2;
echo $divisao;

echo"<br>";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Matemáticos</title>
    </head>
    <bory>
        <p>2 + 5 = <?=$adicao?></p>
        <p>2 + 5 = <?=$subtracao?></p>
        <p>2 + 5 = <?=$multiplicacao?></p>
        <p>2 + 5 = <?=$divisao?></p>

        <?php
        echo $adicao;
        ?>
        <hr>
        <?=$adicao?>
        <hr>

        <p><?=($adicao * $divisao);?></p>


    </bory>
</html>