<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
//CARREGA APENAS UM USUÁRIO
$root = new Usuario();
$root -> loadById(3);
echo $root;
*/

/*
//CARREGA UMA LISTA DE UUARIOS
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//CARREGA UMA LSTA DE USUARIOS BUSCANDO PELO LOGIN
//busca os usuarios que tem 'jo' no login
$search = Usuario::search("jo");
echo json_encode($search);
*/


//CARREGA UM USUARIO USANDO O LOGIN E A SENHA 
$usuario = new Usuario();
$usuario->login("root", "!@#$");
echo $usuario;

?>