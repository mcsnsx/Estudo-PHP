<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "TRY CATCH";
//Tratamento de erros, forma de prever um problema

echo "<br><br>";

//forçando um erros
try{
    throw new Exception("Houve um erro!", 1);
    
} catch(Exception $e){
    echo json_encode(array(
        //métodos já existentes dentro do exception como os geters and seters
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}

?>