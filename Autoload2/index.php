<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "AUTOLOAD - Método 2";

echo "<br><br>";

//o nome do arquivo deve coner o mesmo nome da classe

/*
require 'Animal.php';
require 'Planeta.php';
require 'Veiculo.php';
*/

//FORMA DE REFERENCIA AUTOLOAD

//Esse método também pode ser feito com esse método em um outro arqui 
//a parte e referenciado a partir do 'require' no index
spl_autoload_register(
    function($classe){
        require "$classe.php";
    }
);

$a = new Animal();
echo "<br><br>";

$b = new Planeta();
echo "<br><br>";

$c = new Veiculo();
echo "<br><br>";

?>