<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "FUNÇÕES COM PARAMETROS DE REFERENCIA";

echo "<br><br>";

function ola ($texto = "mundo", $periodo = "Bom dia"){
    return "Olá, $texto! $periodo <br>";
}

echo ola();
echo ola("Maria");
echo ola(" ", "Boa noite");
echo ola("Fulano");
echo ola("Jubileu", "Boa tarde");
echo ola("Xavier", " ");

echo "<br><br>";

function ola2 (){
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola2("Bom dia"));

echo "<br><br>";

$salario = 1567.76;
$valorAjuste = 0;

function AjustarSalario ($sal, &$valorAjuste){
    $valorAjuste = 300.00;

    return ($sal + $valorAjuste);
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "O valor ajustado é de: <b>R$ {$valorFinal}</b>, com aumento de: <b>R$ {$valorAjuste}</b>.";

echo "<br><br>";

//declaração de tipos escalares
function soma(int ... $valores){
    return array_sum ($valores);
}

echo soma(2,2) . "<br>";
echo soma(25,33) . "<br>";
echo soma(1.7,3.2) . "<br>"; //ele ignnora numeros flutuantes

echo "<br><br>";

//declaração de outros tipos de dados
function soma1(float ... $valores):string{
    return array_sum ($valores);
}

echo var_dump (soma1(2,2)) . "<br>";
echo soma1(25,33) . "<br>";
echo soma1(1.7,3.2) . "<br>";

echo "<br><br>";

?>