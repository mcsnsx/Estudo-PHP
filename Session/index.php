<?php

echo "SESSION";

//NÃO SE USA <BR>, ESTOU USANDO AUQI APENAS PARA FINS ACADEMICOS

echo "<br><br>";

//Toda session gera um cookie

//Session_start ---> inicia uma sessão para o host atual
session_start();

$_SESSION["key"] = date("H:i:s");

echo $_SESSION["key"];

echo "<br><br>";

//$_SESSION["nome"]= ---> cria uma sessão e atribui um valor a ela.
$_SESSION ["nome"] = "Hcode";

?>