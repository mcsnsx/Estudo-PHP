<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MANIPULANDO ARQUIVOS";

echo "<br><br>";

require_once("config.php");

$sql = new Sql();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach($usuarios[0] as $key => $value){
    array_push ($headers, ucfirst ($key));
}

//abre o arquivo e o prepara para ser escrito
$file = fopen("usuarios.csv", "w+");

//escreve e determina o separador de informações
fwrite($file, implode(", ", $headers) . "\r\n");

//implode ---> configura o que separa as informações
//echo implode(", ", $headers);

//Inserindo os dados na linhas
foreach ($usuarios as $row) {
    $data = array();

    //Inserindo dados nos campos 
    foreach ($row as $key => $value) {
        array_push ($data, $value);
    }

    fwrite($file, implode (", ",$data) . "\r\n");
}

//fecha o arquivo
fclose($file);

//print_r($headers);

?>