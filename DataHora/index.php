<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

//Indica o referencia de horario em determinado local
date_default_timezone_set('America/Sao_Paulo');

echo "DATA E HORA";

echo "<br><br>";

echo date("d/m/y");
//      dia/mes/ano

// 'D' maiusculo = dia da semana
// 'd' minusculo = dia em numeros
// 'M' maiusculo = escrito o nome do mes
// 'm' minusculo = mes em numeros
// 'Y' maiusculo = todos os numeros referente ao ano
// 'y' minusculo = numeros do ano abreviados, mostra os dois ultimos
// BUSCAR NA DOCUMENTAÇÃO OUTRAS VARIAÇÕES

echo "<br><br>";

echo date("h:i:s");
//       hora/min/seg

// 'i' minusculo = zero a esquerda

echo "<br><br>";

//Método 2
echo date("d/m/y h:i:s");
//      dia/mes/ano hora/min/seg

echo "<br><br>";

//Método 3
$hora = date("h");
echo $hora;

echo "<br><br>";

if($hora > 0 && $hora <=4){
    echo "Boa madrugada!";
}elseif ($hora >= 5  && $hora <= 12){
    echo "Bom dia!";
}elseif ($hora >= 12  && $hora <= 17){
    echo "Boa tarde!";
}elseif ($hora >= 18  && $hora <= 00){
    echo "Boa noite!";
}else {
    echo "Hora não informada!";
}