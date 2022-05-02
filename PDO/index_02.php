<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "CONEXÃO - SQL Server";
//Padrão de comandos para interagir com o banco de dados

echo "<br><br>";

$conn = new PDO("sqlsrv:Database=dbphp8;server=localhost;ConnectionPooling=0", "sa", "cap@2022");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

/*
foreach($results as $row){
    foreach ($row as $key => $value){
        echo "<strong>" .$key. ":</strong>" .$value. "<br>";
    }
    echo "===================================================<br>";
}
*/


?>