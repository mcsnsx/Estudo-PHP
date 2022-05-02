<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MySQL - Deletando Dados";
//Padrão de comandos para interagir com o banco de dados

echo "<br><br>";

$conn = new PDO ("mysql:host=localhost;dbname=dbphp8", "root", "" );

//DELETE ---> Deletar
$stmt = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

//bindParam ---> linka as informações
$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "Delete OK!";


?>