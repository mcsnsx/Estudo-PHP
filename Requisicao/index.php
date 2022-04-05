<?php

//INCLUDE --> requisita o arquivo, se o arquivo não existir, ele continua executando o script

//Forma de chamar a função Gravar
include ("/gravar.php");
Gravar("Include", "file.txt");

//Forma de chamar a função Leitura
include ("ler.php");
$texto = Leitura("file.txt");
echo $texto;

//método 2
include_once ''; ("ler.php");

echo "<br><h1>Teste</h1>";

//REQUIRE --> obriga a existencia do arquivo, se o arquivo não existe, ele para o script

//Forma de chamar a função Gravar
require ("/gravar.php");
Gravar("Include", "file.txt");

echo "<br><h1>Olá, mundo!</h1>";

//Forma de chamar a função Leitura
require ("ler.php");
$texto = Leitura("file.txt");
echo $texto;

//método 2
require_once ''; ("ler.php");

echo "<br><h1>Teste</h1>";

?>

<!DOCTYPE html5>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Include/Require</title>
    </head>
    <body>
        <div>
            <?php 
            Leitura ("file.txt");
            ?>
        </div>
    </body>
</html>