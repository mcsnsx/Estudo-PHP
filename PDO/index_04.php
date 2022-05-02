<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MySQL - Inserindo Dados";
//Padrão de comandos para interagir com o banco de dados

echo "<br><br>";

$conn = new PDO ("mysql:host=localhost;dbname=dbphp8", "root", "" );

//UPDAE ---> Atualizar
$stmt = $conn -> prepare ("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$password = "qwerty";
$id = 2;

//bindParam ---> linka as informações
$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);
$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "Alterado OK!";


?>