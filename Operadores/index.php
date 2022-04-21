<?php

echo "OPERADORES";


// '=' = atribui valor
$nome = "Hcode";

echo "<br><br>";

//'.' = concatenador (operador de string, junta as coisas)
echo $nome . " mais alguma coisa";

echo "<br><br>";

//'.=' = operador composto, a variavel vai ter o valor atribuido e mais alguma coisa
$nome .= " treinamentos";

echo $nome;

echo "<br><br>";

//'+=' = pega o valor da variavel e vai somando os valores que forem acrescentados a ela
$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 25;

echo $valorTotal;

echo "<br><br>";

//'-=' = pega o valor da variavel e vai subtraido os valores que forem acrescentados a ela
$valorTotal1 = 0;
$valorTotal1 -= 100;
$valorTotal1 -= 25;

echo $valorTotal1;

echo "<br><br>";

//'*=' = pega o valor da variavel e vai multiplicando os valores que forem acrescentados a ela
$valorTotal2 = 1;
$valorTotal2 *= 100;
$valorTotal2 *= 25;

echo $valorTotal2;

echo "<br><br>";

//porcentagem
$valorTotal3 = 100;
$valorTotal3 *= .1;

echo $valorTotal3;


echo "<br><br>";



?>