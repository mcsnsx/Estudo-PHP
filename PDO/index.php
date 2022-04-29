<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "PDO - PHP Data Object";
//Padrão de comandos para interagir com o banco de dados

echo "<br><br>";

$conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    foreach ($row as $key => $value){
        echo "<strong>" .$key. ":</strong>" .$value. "<br>";
    }
    echo "===================================================<br>";
}


?>