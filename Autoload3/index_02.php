<?php

//Função para verificar se a classe existe 
function incluirClasses($nomeClasse){
    if (file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }
}

//Função usada pelo PHP para ajustar lacunas 
spl_autoload_register ("incluirClasses");
//Função para achar as classes em outra pasta
spl_autoload_register (function($nomeClasse){
    if (file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

$carro = new DelRey();

echo "<br><br>";

$carro -> acelerar(80);

?>