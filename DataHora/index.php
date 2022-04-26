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
echo date("d/m/y h:i:s", 1650982185);
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

echo "<br><br>";

//Quantidade de segundo de 01/01/1970 até agora
//Essa data é o marco zero do sistema de calendarios usados pelo sistema Unix/Posix
//O PHP é baseado na linguagem C# e por extensão no sistema Unix, por isso usa o time stamp como referencia
echo time();

echo "<br><br>";

//Converte uma string para time stamp ---> mostra a quantidade de segundos até aquele momento
echo strtotime("2001-09-11");

echo "<br><br>";

$ts = strtotime("2001-09-11");
echo date ("l, d/m/Y", $ts);

echo "<br><br>";

//Sempre é possivel acrescentar valores dentro dos parametros do 'strtotime' para manipular a data ou a hora

//mostra a data de amanhã
$ts = strtotime("+1 day");
echo date ("l, d/m/Y", $ts);

echo "<br><br>";

//mostra a data daqui a uma semana
$ts = strtotime("+1 week");
echo date ("l, d/m/Y", $ts);

?>