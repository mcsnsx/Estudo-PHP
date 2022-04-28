<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "BANCO DE DADOS - MYSQL";

echo "<br><br>";

//conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp8");

//Alert para um possivel erro dentro do banco de dados
if ($conn->connect_error){
    echo "Error: " . $conn -> connect_error;
}

//'PREPARE' ---> forma de inserir comandor dentro do banco de dados
$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

//'bind_param' ---> espero o tipo de dados // "ss" significa que são duas strings
$stmt -> bind_param("ss", $login, $password);

$login = "user";
$password = "12345";

//comando que executa a ação dentro do banco de dados
$stmt -> execute();

$login = "root";
$password = "!@#$";

//comando que executa a ação dentro do banco de dados
$stmt -> execute();
?>