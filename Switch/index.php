<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "SWITCH"; 
// teste de caso, vai testando as condições até uma condição que seja 
//verdadeira então para o laço..

echo "<br><br>";

$dia = 2;
$msg = "";

switch($dia){
    case 1:
        $msg = "dia 1";
        break;
    case 2:
        $msg = "dia 2";
        break;
    case 3:
        $msg = "dia 3";
        break;
    case 4:
        $msg = "dia 4";
        break;
    case 5:
        $msg = "dia 5";
        break;
    case 6:
        $msg = "dia 6";
        break;
    default:
        $msg = "Não encontrado";
}

$diaDaSemana = 8; //date ("w");
// 'w' --> dia da semana

switch($diaDaSemana){
    case 0:
        echo "Domingo";
    break;

    case 1:
        echo "Segunda-feira";
    break;

    case 2:
        echo "Terça-feira";
    break;

    case 3:
        echo "Quarta-feira";
    break;

    case 4:
        echo "Quinta-feira";
    break;

    case 5:
        echo "Sexta-feira";
    break;

    case 6:
        echo "Sabado";
    break;

    default:
    echo "Data inválida!";

}

?>

<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Switch</title>
    </head>
    <bory>
        <p>Olá, hoje é o <?=$msg;?></p>
    </bory>
</html>