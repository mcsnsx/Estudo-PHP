<?php 

echo "SESSION";

//NÃO SE USA <BR>, ESTOU USANDO AUQI APENAS PARA FINS ACADEMICOS

echo "<br><br>";

//Toda session gera um cookie

session_start();
if (isset ($_SESSION["key"])){
    echo $_SESSION["key"];
}

?>