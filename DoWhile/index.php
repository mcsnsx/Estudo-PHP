<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS

echo "DO WHILE"; // atira primeiro, pergunta depois..

echo "<br><br>";

$i = 0;

do{
    echo "Valor: {$i} <br>";
    $i++;
} while ($i < 10);

echo "<br><br>";

$total = 150;
$desconto = 0.9;

do{
    $total *= $desconto;
} while ($total > 100);

echo $total;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Do While</title>
    </head>
    <body>
        <ul>
            <?php
            $i = 0;
            do{
                ?>
                <li>Valor = <?= $i; ?></li>
                <?php
                $i++;
            } while ($i <= 10);
            ?>
        </ul>
    </body>
</html>