<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "ERROS";
//Tratamento de erros, forma de prever um problema

echo "<br><br>";

//ocultar erro pra que não apareça na tela
error_reporting(E_ALL ^ ~E_NOTICE);

$nome = $_GET ["nome"];

echo $nome;

/*
//tras a mensagem de erro
function error_handler($code, $message, $file, $line){
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));
}

//onde eu falo pro PHP qual função ele deve usar
set_error_handler("error_handler");

echo 100/0;
*/

?>
