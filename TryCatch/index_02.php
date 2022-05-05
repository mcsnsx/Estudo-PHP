<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "TRY CATCH";
//Tratamento de erros, forma de prever um problema

echo "<br><br>";

function trataNome($name){
    if (!$name){
        throw new Exception("Nenhum nome foi informado!", 1);
        
    }
    echo ucfirst($name) . "<br>";
}

//tratar erro em tempo de execução
try{
    trataNome("Joao");
    trataNome("");
    
} catch(Exception $e){
    //métodos já existentes dentro do exception como os geters and seters
    echo $e->getMessage();
} finally{
    echo "Executou o Try!";
}

?>