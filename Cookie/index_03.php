<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "COOKIE";
//Cookie ---> armazena valores no browser temporáriamente, são
//pequenos arquivos criados tanto na maquina do usuario e quanto no servidor web

echo "<br><br>";

//recuperando informações do cookie
if(isset ($_COOKIE["NOME_DO_COOKIE"])){
    $obj = json_decode ($_COOKIE["NOME_DO_COOKIE"]/*, true*/);
    echo $obj->empresa;
}


?>