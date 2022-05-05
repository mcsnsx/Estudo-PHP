<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "CURL - API";
//Função baseada na biblioteca Curl, permite que o PHP converse 
//com outros sistemas remotos através de REST API's 

echo "<br><br>";

$cep = "01310100"; // ---> Av. Paulista
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

//Execução do comando
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//passa pela validação de segurança
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data["localidade"]);

?>