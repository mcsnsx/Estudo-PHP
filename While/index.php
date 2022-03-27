<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "WHILE";

echo "<br><br>";

$cont = 0;
while ($cont < 20){
    echo "Cont: {$cont}<br>";
    $cont++;
    // OU $cont += 1;
    // OU $cont = $cont + 1; 
}
?>

<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>While</title>
        </head>
        <body>
            <ul>
                <?php
                $cont = 0;
                while ($cont < 30){
                    if ($cont > 5 && $cont <= 20){
                    ?>
                    <li><?=$cont; ?></li>
                    <?php
                }
                    $cont++;
                }
                ?>
            </ul>
        </body>
    </html>
</DOCTYPE>