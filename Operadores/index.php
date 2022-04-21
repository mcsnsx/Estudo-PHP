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

echo "OPERADORES DE COMPARAÇÃO";

echo "<br><br>";

$a = 30;
$b = 55;

//'>' = compara se $a é maior que $b, tras um resultado bool(verdadeiro ou falso)
var_dump($a > $b);

echo "<br><br>";

//'<' = compara se $a é menor que $b, tras um resultado bool(verdadeiro ou falso)
var_dump($a < $b);

echo "<br><br>";

//'==' = compara se $a é igual a $b (se tem o mesmo valor), tras um resultado bool(verdadeiro ou falso)
var_dump($a == $b);

echo "<br><br>";

//'==' = compara se $a é identico a $b (no valor e tipo de variável), tras um resultado bool(verdadeiro ou falso)
var_dump($a === $b);

echo "<br><br>";

//'!=' = compara se $a é diferente de $b (se tem valores diferentes), tras um resultado bool(verdadeiro ou falso)
var_dump($a != $b);

echo "<br><br>";

//'!=' = compara se $a é diferente de $b (se são diferentes nos valores e no tipo de variável), tras um resultado bool(verdadeiro ou falso)
var_dump($a !== $b);

echo "<br><br>";

//'<=>' = compara maior, menor e igual
var_dump($a <=> $b);

echo "<br><br>";

//'??' = mostra se o valor é nulo
$c = NULL;
$d = NULL;
$e = 10;

echo $c ?? $d ?? $e;

echo "<br><br>";

echo "OPERADORES INCREMENTAIS E DECREMENTAIS";

echo "<br><br>";

$f = 10;

//'++' = +1, vai somando como um contador
//conta depois -> pós incrmento
echo $f++;

echo "<br>";

echo $f;

echo "<br>";

//'++' = +1, vai somando como um contador
//conta antes -> pré incremento
echo ++$f;

echo "<br>";

echo $f;

echo "<br><br>";

$g = 10;

//'--' = -1, vai subtraindo como um contador
//conta depois -> pós incremento
echo $g--;

echo "<br>";

echo $g;

echo "<br>";

//'--' = -1, vai subtraindo como um contador
//conta antes -> pré incremento
echo --$g;

echo "<br>";

echo $g;

echo "<br><br>";

echo "ORDEM DE EXECUÇÃO DOS OPERADORES";
//PRECEDENCIA DE OPERADOR -> quando há operadorees de várias categorias

echo "<br><br>";

//executa primeiro a divisão
$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br>";

//para que a soma seja executada primeiro, coloca-se '()'
$resultado1 = (10 + 3) / 2;

echo $resultado1;

echo "<br>";

//quando há interferencia de operadores lógicos, o resultado é um boolean
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump ($resultado2);

echo "<br>";

//quando usamos o '&&' e uma das operações é falsa, o resultado sai como falso
$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump ($resultado3);

echo "<br>";

//quando usamos o '&&' e ambas as operações são verdadeiras, o resultado sai como verdadeiro
$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump ($resultado3);

echo "<br>";

//quando usamos o '||' significa 'ou', portanto se pelo mennos uma das operações for verdadeira, ele retorna como verdadeiro
$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 20;

var_dump ($resultado3);

echo "<br>";


?>