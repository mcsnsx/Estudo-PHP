<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "INTERFACE";

echo "<br><b>Classe de Metodos</b>";

echo "<br><br>";

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{
    
    public function acelerar($velocidade){
        echo "O veiculo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade){
        echo "O veiculo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){
        echo "O veiculo engatou a marcha " . $marcha;
    }
}

$carro = new Civic();

$carro -> trocarMarcha(1);
?>