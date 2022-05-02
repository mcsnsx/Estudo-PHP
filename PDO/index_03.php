<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MySQL - Inserindo Dados";
//Padrão de comandos para interagir com o banco de dados

echo "<br><br>";

$conn = new PDO ("mysql:host=localhost;dbname=dbphp8", "root", "" );

//INSERT ---> Inserir dados
$stmt = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

//bindParam ---> linka as informações
$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();

echo "Inserido OK!";

?>