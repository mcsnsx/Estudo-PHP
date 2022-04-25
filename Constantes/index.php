<?php

//NÃO SE USA <BR>, ESTOU USANDO APENAS PARA FINS ACADEMICOS

echo "CONSTANTES";

echo "<br>";

define ("min", 17); //constante chamada 'min' ccom valor '17'
define ("max", 45); //constante chamada 'max' ccom valor '45'

$idade = 25; //idade da pessoa '25'

echo "Min: " . min . "<br>";
echo "Max: " . max . "<br>";
echo "Idade: " . $idade . "<br><br>";

if($idade >= min && $idade <= max){     //Validação da idade
    echo "Acesso liberado...";          //Retorno verdadeiro
} else {
    echo "Acesso bloqueado...";          //Retorno falso
}

echo "<br>";

echo "<br>" . PHP_VERSION; //constante pré-definida que mostra a versão do PHP

echo "<br><br>";

echo DIRECTORY_SEPARATOR; //tras a barra de diretorio

echo "<br><br>";

echo "EXEMPLO 2";

echo "<br><br>";

define ("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

echo "<br><br>";

echo "EXEMPLO 3  - CONSTANTE COMO UM ARRAY";

echo "<br><br>";

define ("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r (BANCO_DE_DADOS);

//É uma boa pratica declarar as constantes com letras maiusculas

?>