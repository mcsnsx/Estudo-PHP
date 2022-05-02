<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MySQL - Transações";
//Padrão de comandos para interagir com o banco de dados

echo "<br><br>";

$conn = new PDO ("mysql:host=localhost;dbname=dbphp8", "root", "" );

//beginTransaction ---> transação, só funciona quando toda operação da certo, se alguma parte falahar, ela é cancelada como um todo
$conn -> beginTransaction();

//DELETE ---> Deletar
$stmt = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt -> execute(array($id));

//---> fator que faz a transação ser cancelada caso algo de errado ctrl + Z do banco de dados, kkk
$conn -> rollback();

//commit ---> envia um commit
$conn -> commit();

echo "Delete OK!";


?>