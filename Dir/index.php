<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MANIPULANDO DIRETÓRIOS";

echo "<br><br>";

$name = "images";

//is_dir ---> pergunta se é um diretorio e retorna um bool
if (!is_dir($name)){
    //mkdir ---> cria um diretorio
    mkdir($name);
    echo "Diretorio $name criado com sucesso!";
}else{
    //rmdir ---> remove o diretorio
    //rmdir($name);
    echo "O diretorio $name foi removido!";
}

?>