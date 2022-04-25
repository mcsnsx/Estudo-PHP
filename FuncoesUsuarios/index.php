<?php

echo "FUNÇÕES DE USUÁRIOS";

//NÃO SE USA <BR>, ESTOU USANDO AUQI APENAS PARA FINS ACADEMICOS

echo "<br><br>";

function ola (){
    return "Olá, mundo!";
}

echo ola();

$frase = ola();

echo "<br><br>";

echo strlen($frase);

echo "<br><br>";

function salario(){
    return 946.00;
}

echo "José recebeu 3 salários: " . (salario()*3);
?>