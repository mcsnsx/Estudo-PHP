<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "FUNÇÕES COM PARAMETROS DE REFERENCIA";

echo "<br><br>";

$salario = 1567.76;
$valorAjuste = 0;

function AjustarSalario ($sal, &$valorAjuste){
    $valorAjuste = 300.00;

    return ($sal + $valorAjuste);
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "O valor ajustado é de: <b>R$ {$valorFinal}</b>, com aumento de: <b>R$ {$valorAjuste}</b>.";

?>