<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS..

//fopen() ---> abre um arquivo para ser manipulado, deixa na memoria para fazer qualquer manipulação

//fread() ---> com base no ponteiro definido no fopen, ele faz a leitura

//fwrite() com base no ponteiro definido no fopen, ele escreve o arquivo

//fclose ---> fecha o ponteiro de um arquivo


function Gravar(string $texto, string $arquivo){
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} \r\n");
    fclose($fp);
} 

Gravar(date("d/m/Y H:i:s"), "file.txt");

function Leitura(string $arquivo){
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

// VALOR RETORNADO --> retorna o tamanho do arquivo em bytes, ou false (e gera um erro de nível E_WARNING) em caso de erro
// OBS: por conta do tipo inteiro do PHP ser sinalizado em muitas plataformas 32bits, algumas funções de arquivos podem retornar resultados inesperados para arquivos maiores que 2gb


echo Leitura("file.txt");