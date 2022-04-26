<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "FUNÇÕES ANÔNIMAS";
//Função que não tem um nome

echo "<br><br>";

//Forma de criar um alerta quando um processo lento termina
function test($callback){
    //Processo lento
    $callback();
}

test(function(){
    echo "Terminou";
});

echo "<br><br>";

echo "COLOCAR FUNÇÃO DENTRO DA VARIÁVEL";
//Outro método de função anonima

echo "<br><br>";

$fn = function($a){
    var_dump($a);
};

$fn("Oi");

?>