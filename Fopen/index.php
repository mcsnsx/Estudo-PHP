<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MANIPULANDO ARQUIVOS";

echo "<br><br>";

//fopen ---> abre o arquivo
//w+ ---> prepara o arquivo para escrever
//a+ ---> acrescenta informações
$file = fopen("log.txt", "a+");

/*
\r ---> retorno
\n ---> nova linha
\t ---> tab
*/

//fwrite ---> função que dita o que será escrito no arquivo
fwrite($file, date("Y-m-d H:i:s") . "\r\n");

//fclose ---> fecha o arquivo
fclose($file);

echo "Arquivo criado com sucesso!";

?>