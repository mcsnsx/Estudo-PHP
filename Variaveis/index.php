<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI APENAS PARA FINS ACADEMICOS!!!

echo "COMO DECLARAR VARIÁVEIS<br>";

echo "<br>";

//AS VARIÁVEIS SEMPRE COMEÇAM COM '$'

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

//No PHP é possivel resetar uma variável
$nome1 = "Mac";

echo $nome1;

echo "<br>";

unset ($nome1);

echo "<br><br>";

//Comando 'exit', não executa o código a partir desse comando, ele para
//exit;

//Também é possivel verificar se a variável existe com 'isset'
if (isset($nome1)){
    echo $nome1;
}

//Concatenar variável
$nomeComposto = $nome . $nome_do_meio;

echo $nomeComposto;

echo "<br><br>";


//No PHP não há necessidade de declarar o tipo da variável como no JAVA, o PHP faz isso sozinho..

//Retrona o tipo da variável 
echo gettype ($nome);

echo "<br>";

//tipo char
$sexo = "M<br>";
echo gettype ($sexo);
echo ($sexo);

echo "<br>";

//Puxa todas as caracteristcas da variável
var_dump ($nome);

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

//tipo nulo e vazio
$nulo = NULL;
$vazio = "";
