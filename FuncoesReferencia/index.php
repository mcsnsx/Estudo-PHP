<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "FUNÇÕES COM PARAMETROS DE REFERENCIA";

echo "<br><br>";

$a = 10;

//O que acontece com a variável dentro da função, fica dentro da função..
//No restante do escopo, o valor de $a vola a ser 10
//'(&$a)' ---> colocar o & é uma forma de passagem de parametro por referencia
//quando há passagem de valor por referencia, a váriavel se modifica também para o restante do escopo
function trocaValor (&$a){
    $a += 50;
    return $a;
}

//Parametro de função é diferente de variável

echo trocaValor ($a);

echo "<br><br>";

echo trocaValor ($a);

echo "<br><br>";

echo $a;

echo "<br><br>";

$pessoa = array (
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as &$value){
    if (gettype($value) === 'integer') $value += 10;
    echo $value . '<br>';
}

print_r($pessoa);

?>