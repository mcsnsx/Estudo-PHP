<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "HERANÇA";

echo "<br><b>Classes primárias e secundarias</b>";
//ABSTRAÇÃO --> fazer classes genericas que podem conter atributos correspondentes a outras classes

echo "<br><br>";

class Documento{
    private $numero;

    public function getNumero(){
        return $this-> numero;
    }
    
    public function setNumero($n){
        $this-> numero = $n;
    }
}

class CPF extends Documento{
    public function validar():bool{
        //Validação do CPF
        return true;
    }
}

$doc = new CPF();

$doc -> setNumero("12345678900");

var_dump($doc -> validar());

echo "<br><br>";

echo $doc->getNumero();

?>