<?php 

echo "JSON";

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS

echo "<br><br>";

//JSON (JavaScript Object Notation) --> Mecanismo para transporte de informações

/*

https://jsonformatter.curiousconcept.com/

{
    "firstname" : "Gunnar",
    //chave         nome
    "lastname" : "Correa"
}

{
    "titulo" : "Titanic",
    "sinopse" : "Um navio colide com um iceberg e afunda",
    "ano" : 2017
    "horarios" : ["16:00" , "19:00" , "20:00"]
}

*/

$arrayFilme = array(
    "titulo" => "titanic",
    "sinopse" => "Um navio colide com um iceberg e afunda",
    "ano" => 2017,
    "horarios" => array("16:00" , "19:00" , "20:00"
    )
);

//var_dump($arrayFilme);

//Convertendo array em JSON
$jsonStr = json_encode($arrayFilme);
echo $jsonStr;
?>