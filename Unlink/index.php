<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "REMOVENDO ARQUIVOS";

echo "<br><br>";

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

echo "Arquivo removido!";

?>