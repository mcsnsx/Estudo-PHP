<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "DATA E HORA EM CLASSES";

echo "<br><br>";

$dt = new DateTime();

//Cria um intervalo de tempo ---> period 15 days
$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/Y H:i:s");

echo "<br><br>";

//Soma a data atual e o periodo estabelecido
$dt -> add($periodo);

echo $dt -> format("d/m/Y H:i:s");

?>