<?php

echo "STRINGS";

$nome = "Hcode";

echo "<br><br>";

$nome2 = 'Treinamentos';

//DIFERENÇA ENTRE USAR ASPAS DUPLAS " " E ASPAS SIMPLES ' '
//com as aspas duplas é possivel inserir uma variável dentro das aspas trazendo seus valores sem a necessidade de concatenar
//interpolação de variáveis
echo "ABC $nome";

echo "<br><br>";

//com as aspas simples é necessario concatenar para trazer o valor da variável, ele entende tudo como um texto simples
echo 'ABC $nome';

?>