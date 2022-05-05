<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "COOKIE";
//Cookie ---> armazena valores no browser temporáriamente, são
//pequenos arquivos criados tanto na maquina do usuario e quanto no servidor web

$data = array(
    "empresa"=>"Hcode Treinamentos"
);

//Criando Cookie -->nome, valor e tempo de vida[em segundos]
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "<br><br>";

echo "OK";



?>