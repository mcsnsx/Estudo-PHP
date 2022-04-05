<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS..

//fopen() ---> abre um arquivo para ser manipulado, deixa na memoria para fazer qualquer manipulação

//fread() ---> com base no ponteiro definido no fopen, ele faz a leitura

//fwrite() com base no ponteiro definido no fopen, ele escreve o arquivo

//fclose ---> fecha o ponteiro de um arquivo


function Gravar(string $texto, string $arquivo){
    $fp = fopen($arquivo, "a+");
    fwrite($fp, $texto);
    fclose($fp);
} 

Gravar("Persistencia em arquivo texto!!!", "file.txt");