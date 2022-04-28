<?php

spl_autoload_register(
    function($classe){
        var_dump($classe);
        require "$classe.php";
    }
);

//require_once ("DelRey.php");

$carro = new DelRey();

echo "<br><br>";

$carro -> acelerar(80);

?>