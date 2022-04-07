<?php

echo "TRY E CATCH";

//NÃO SE USA <BR>, ESTOU USANDO AQU PARA FINS EDUCACIONAIS

//TRY E CATCH ---> permite tentar executar uma operação e
//se houver um erro ele será tratado no bloco catch, nele 
//podemos ter acesso aos detalhes do erro ou simplesmente
//não exibir a mensagem para o cliente. 
//* não costuma ser usado para erros da linguagem e sim 
//para erros para erros que podem acontecer por motivos 
//variáveis(instabilidade no servidor do banco de dados, 
//acessar arquivos que não existem e etc).

function AbrirConexao(){
    $connection = new PDO ("mysql:host=localhost;dbname=curso_php;charset=utf8", 'root','');
    return $connection;
}

?>