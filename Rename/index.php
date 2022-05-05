<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MOVENDO ARQUIVOS";

echo "<br><br>";

$dir1 = "folder_01";
$dir2 = "folder_02";

//Criando os diretorios
if(!is_dir($dir1)) mkdir ($dir1);
if(!is_dir($dir2)) mkdir ($dir2);

$filename = "README.txt";

if(!file_exists($dir1 .DIRECTORY_SEPARATOR. $filename)){
    $file = fopen($dir1 .DIRECTORY_SEPARATOR. $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

//rename ---> função que move o arquivo de um diretorio paraoutro
rename(
    $dir1 .DIRECTORY_SEPARATOR. $filename, //ORIGEM
    $dir2 .DIRECTORY_SEPARATOR. $filename  //DISTINO
);

echo "Arquivo movido com sucesso!";
?>