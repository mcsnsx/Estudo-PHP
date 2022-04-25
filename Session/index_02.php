<?php 

echo "SESSION";

//NÃO SE USA <BR>, ESTOU USANDO AUQI APENAS PARA FINS ACADEMICOS

echo "<br><br>";

//Toda session gera um cookie

//Session_start ---> inicia uma sessão para o host atual
session_start();
if (isset ($_SESSION["key"])){
    echo $_SESSION["key"];
}

echo "<br><br>";

//Session_unset ---> apaga a variável
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//Session_destroy ---> destroi todas as sessões para o host atual
session_destroy();

?>