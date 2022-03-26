<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI APENAS PARA FINS ACADEMICOS!!!

echo "COMO DECLARAR VARIÁVEIS<br>";

echo "<br>";

//FORMAS DE DECLARAR VARIAVEIS
$nome = "Maria<br>";
echo $nome;

echo "<br>";

$nomeCompleto = "Maria C. Xavier<br>";
echo $nomeCompleto;

echo "<br>";

$nome_do_meio = "Carolina<br>";
echo $nome_do_meio;

echo "<br>";

//No PHP não há necessidade de declarar o tipo da variável como no JAVA, o PHP faz isso sozinho..

//Retrona o tipo da variável 
echo gettype ($nome);

echo "<br>";

//tipo char
$sexo = "M<br>";
echo gettype ($sexo);
echo ($sexo);

echo "<br>";

//tipo double
$salario = 3.500;
echo gettype($salario);
echo($salario);

echo "<br>";

//tipo bool ou boolean
$valido = true;
echo gettype($valido);
echo($valido);
