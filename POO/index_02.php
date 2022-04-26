<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "CONCEITO DE PROGRAMAÇÃO ORIENTADA A OBJETOS - POO";
//é um estilo de programação 

echo "<br><b>Criando classes</b>";

echo "<br><br>";

//Toda classe sempre começa com letra maiuscula
class Pessoa{ //classe

    //public --> status do atributo [público]
    public $nome; //atributo

    //public --> status da função [público]
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

echo "<br><br>";

//Toda classe sempre começa com letra maiuscula
class Carro{ //classe

    //private --> status do atributo [privado]
    private $modelo; //atributo
    private $motor; //atributo
    private $ano; //atributo

    //public --> status da função [público]
    public function getModelo(){ //método
        return $this -> modelo;
    }

    //public --> status da função [público]
    public function setModelo($modelo){ //método
        $this -> modelo = $modelo;
    }

    //public --> status da função [público]
    public function getMotor(): float{ //método
        return $this -> motor;
    }

    //public --> status da função [público]
    public function setMotor($motor){
        $this -> motor = $motor;
    }

    //public --> status da função [público]
    public function getAno(): int{ //método
        return $this -> ano;
    }

    //public --> status da função [público]
    public function setAno($ano){ //método
        $this -> ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=> $this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol -> exibir());

?>