<?php

$nome = "Mac";

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS!!!

echo "Olá, Mundo! <br>"; 
echo "Meu nome é {$nome}!<br>"; 
echo " Meu nome é <b>" . $nome . "</b>, tenho 26 anos.<br><br>";

print "Olá, novo Mundo!<br>";
print "Meu nome é {$nome}!<br>"; 
print " Meu nome é " . $nome . ", tenho 26 anos.<br>";
print "Meu nome é $nome<br><br>"; //Funciona, mas não é uma boa prática


// sempre retorna o número 1, se for preciso uma variável que retorne um valor, nós usamos o print..
//$retorno = print "Meu nome é {$nome}<br><br>";
//echo $retorno;

echo "EXEMPLO<br>";

$nomeDois = "Maria";

echo "Meu nome é Maria <br>";
echo "Meu nome é: {$nomeDois}<br>";
echo "Meu nome é: " . $nomeDois . "<br>";
print "Meu nome é Maria";