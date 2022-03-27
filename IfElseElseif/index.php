<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI APENAS PARA FINS ACADEMICOS

echo "IF, ELSE e ELSE IF";

echo "<br><br>";

$idade = 18;
$senha = "1234";
$acesso = true;

if($idade >= 18){
    echo "Okay";
}else{
    echo "Invalido";
}

echo "<br><br>";

if ($senha == "123"){
    echo "Acesso Autorizado";
} else {
    echo "Acesso Negado";
}

echo "<br><br>";

if ($senha == "123"){
    echo "Acesso Autorizado";
} else if ($senha == "1234"){
    echo "Acesso Autorizado nivel 2";
} else {
    echo "Acesso Negado";
}

echo "<br><br>";

//condição 'E' -> &&
if (($idade >= 18) && ($senha == "1234")){
    echo "Acesso Autorizado";
} else {
    echo "Acesso Negado";
}

echo "<br><br>";

//condição 'OU' -> ||
if (($idade >= 18) || ($senha == "1234")){
    echo "Acesso Autorizado nivel 1";
} else {
    echo "Acesso Negado";
}

echo "<br><br>";

//condição 'DIFERENTE DE' -> !=
if (($idade >= 18) || ($senha != "1234")){
    echo "Acesso Autorizado diferente";
} else {
    echo "Acesso Negado";
}

echo "<br><br>";

//condição 'boolean' -> verdadeiro ou falso
if($acesso != true){
    echo "Okay";
} else {
    echo "Invalido";
}

echo "<br><br>";

//Quando você não especifica a condição, o IF entende como 'TRUE' automaticamente..
//condição não especificada..
if($acesso){
    echo "Okay";
} else {
    echo "Invalido";
}

echo "<br><br>";

//condição especificada -> O uso da '!' no inicio significa "diferente"..
if(!$acesso){
    echo "Okay";
} else {
    echo "Invalido";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset ="UTF-8">
        <title>IF</title>
    </head>
    <body>
        <?php
        if($idade >= 18){
            echo "<h1>Autotizado</h1>";
        }else {
            echo "<h1>Negado</h1>";
        }

        if($idade >= 18 && $acesso != true){
            echo "<h1>Autotizado</h1>";
        }else {
            echo "<h1>Negado</h1>";
        }
        ?>
    </body>
</html>