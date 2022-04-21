<?php

echo "VARIÁVEIS GLOBAIS";
echo "<br><br>";

//toda informação via GET ou POST , vem como uma string, para que seja diferente deve-se converte-la ou declarar seu tipo 
$nome = (int)$_GET["a"];

var_dump($nome);

echo "<br><br>";

//como pegar o IP do usuário --> $_SERVER pega informações do ambiente, não só do servidor
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br><br>";

//SCRIPT_NAME pega o nome do arquivo
$ip1 = $_SERVER["SCRIPT_NAME"];
echo $ip1;

?>