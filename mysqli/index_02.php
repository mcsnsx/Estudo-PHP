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

//faz uma busca no banco de dados e mostra na tela
$result = $conn -> query ("SELECT * FROM tb_usuarios ORDER BY deslogin");

//converter para JSON
$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data, $row);
    //var_dump($row);
}

echo json_encode($data);

?>