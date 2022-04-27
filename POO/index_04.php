<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "CONCEITO DE PROGRAMAÇÃO ORIENTADA A OBJETOS - POO";
//é um estilo de programação 

echo "<br><b>Métodos Mágicos</b>";

echo "<br><br>";

/*
O que são métodos mágicos?
São coisas que acontecem fora da nossa vista, quando os
metodos foram chamados automáticamente, depois que já foram 
criados, todos os métodos mágicos começam com o uso de dois
'_' (underline) no inicio, ou '__construction'.
*/

/*
O que são métodos construtores?
São métodos que são executados automaticamente quando a 
classe é instanciada, o método deve ter exatamente o mesmo
nome da classe.
*/

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){ //método magico
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        var_dump ("DESTRUIR");
    }

    public function __toString(){
        return $this-> logradouro . " , " . $this -> numero . " - " . $this -> cidade;
    }
}

//$newEndereco = new Endereco ("Rua Ademar Saraiva Leão", "123", "Santos");

$meuEndereco = new Endereco ("Rua Ademar Saraiva Leão", "123", "Santos");

//var_dump($newEndereco);


echo $meuEndereco;

//unset($newEndereco);

?>