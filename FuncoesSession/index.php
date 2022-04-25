<?php

echo "FUNÇÕES DE SESSÃO";

//NÃO SE USA <BR>, ESTOU USANDO AUQI APENAS PARA FINS ACADEMICOS

echo "<br><br>";

//Session_start ---> inicia uma sessão para o host atual
session_start();

//Session_save_path ---> indica onde a sessão está sendo salva
echo session_save_path();

echo "<br><br>";

//Session_status ---> indica o status da sessão
var_dump(session_status());

echo "<br><br>";

switch (session_status()){
    case PHP_SESSION_DISABLED:
        echo "Sessão desabilitada!";
    break;

    case PHP_SESSION_NONE:
        echo "Sessão habilitada mas não há sessões!";
    break;

    case PHP_SESSION_ACTIVE:
        echo "Sessão habilitada e iniciada!";
    break;
}

?>