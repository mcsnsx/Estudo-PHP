<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "CONCEITO DE PROGRAMAÇÃO ORIENTADA A OBJETOS - POO";
//é um estilo de programação 

echo "<br><b>Criando classes</b>";

echo "<br><br>";

//Toda classe sempre começpa com letra maiuscula
class Pessoa{ //classe

    public $nome; //atributo

    public function falar(){ //metodo
        return "Meu nome é " . $this -> nome;
        //quando um atributo está dentro de um método, é necessario o uso 
        //do '$this' que é uma variável interna do PHP que serve para referenciar 
        //atributos, não é necessário o uso de '$' no atributo em si
    }
}

$maria = new Pessoa();
$maria -> nome = "Maria Carolina";
echo $maria -> falar();

?>