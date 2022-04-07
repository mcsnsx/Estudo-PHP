<?php 

echo "CONVERTENDO JSON EM ARRAY";

//NÃO SE USA <BR>, ESTOU USANDO AQU PARA FINS EDUCACIONAIS

echo "<br><br>";

$jsonStr = '{"titulo":"titanic","sinopse":"Um navio colide com um iceberg e afunda","ano":2017,"horarios":["16:00","19:00","20:00"]}';

$arrFilme = json_decode($jsonStr);

//var_dump($arrFilme);

echo "<p><b>Titulo: </b>" . $arrFilme -> titulo . "</p>";
echo "<p><b>Sinopse: </b>" . $arrFilme -> {"sinopse"} . "</p>";
echo "<p><b>Ano: </b> " . $arrFilme -> ano . "</p>";
echo "<p><b>Horário: </b></p>";

for ($i = 0; $i < count ($arrFilme -> horarios); $i++){
    echo "<p>---------<b>" . $arrFilme -> horarios[$i] ." </b></p>";
}

?>