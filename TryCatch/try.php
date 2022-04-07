<?php

//require_once("func.php");

try{
    AbrirConexao();
} catch(Exception $ex){
    echo "<b>Mensagem:</b>" . $ex-> getMessage() . "<br>";
    echo "<b>Linha:</b> " . $ex-> getLine() . "<br>";
    echo "<b>Arquivo:</b> " . $ex-> getFile() . "<br>";
}

/*
try{
    AbrirConexao();
} catch(Exception $ex){
    echo "<b>Mensagem:</b>" . $ex-> getMessage() . "<br>";
    echo "<b>Linha:</b> " . $ex-> getLine() . "<br>";
    echo "<b>Arquivo:</b> " . $ex-> getFile() . "<br>";
} catch(PDOEXCEPTION $ex){
    echo "<b>Mensagem:</b>" . $ex-> getMessage() . "<br>";
    echo "<b>Linha:</b> " . $ex-> getLine() . "<br>";
    echo "<b>Arquivo:</b> " . $ex-> getFile() . "<br>";
}


try{
    //Tentar fazer algo
}catch (Exception $ex){
    //Trata os erros
}finally{
    //Bloco chamado antes de finalizar a estrutura
}
*/
?>