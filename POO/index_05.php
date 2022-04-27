<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "CONCEITO DE PROGRAMAÇÃO ORIENTADA A OBJETOS - POO";
//é um estilo de programação 

echo "<br><b>Encapsulamento</b>";

echo "<br><br>";

class Pessoa{
    //public --> status da função [público]
    public $nome = "Rasmus Lerdorf";

    //protected --> status da função [protegido], só quem ta dentro da própria classe ou os herdeiros podem acessar essa informação
    protected $idade = 48;

    //private --> status do atributo [privado], só quem ta dentro da própria classe pode acessar essa informação, não pode ser acessada nem pelos herdeiros
    private $senha = "123456";

    public function verDados(){
        echo $this-> nome . "<br>";
        echo $this-> idade . "<br>";
        echo $this-> senha . "<br>";
    }
}

//$objeto = new Pessoa();

//echo $objeto -> nome . "<br>"; //será visivel 
//echo $objeto -> idade . "<br>"; //será visivel apenas aos herdeiros da classe
//echo $objeto -> senha . "<br>"; //não será visivel, apenas dentro da propria classe

//$objeto -> verDados();

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this) . "<br>";

        echo $this-> nome . "<br>";
        echo $this-> idade . "<br>";
        echo $this-> senha . "<br>";
    }

}

$objeto = new Programador();

//echo $objeto -> nome . "<br>"; //será visivel 
//echo $objeto -> idade . "<br>"; //será visivel apenas aos herdeiros da classe
//echo $objeto -> senha . "<br>"; //não será visivel, apenas dentro da propria classe

$objeto -> verDados();

?>