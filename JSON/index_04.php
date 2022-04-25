<?php

echo "JSON";

echo "<br><br>";

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Glaucio',
    'idade'=>25
));

//print_r($pessoas[0]['nome']);

echo json_encode($pessoas);

echo "<br><br>";

echo "JSON EXEMPLO 2";

echo "<br><br>";

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>