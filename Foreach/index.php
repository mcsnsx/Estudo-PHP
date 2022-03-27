<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI APENAS PARA FINS ACADEMICOS..

echo "FOREACH";

echo "<br><br>";

//Array normal
$arrayFrutas = ["Abacaxi", "Banana", "Goiaba", "Maçã", "Uva"]; 

//Array Associativo
$arrFrutas = [ 
    1 => "Abacaxi",
    2 => "Banana",
    3 => "Goiaba",
    4 => "Maçã",
    5 => "Uva",
];

//Foreach sem chave
foreach ($arrFrutas as $v){
    echo $v . "<br>";
}

echo "<br><br>";

//Foreach com chave
foreach ($arrFrutas as $key => $v){
    echo "Key: {$key} => Value: {$v} <br>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Foreach</title>
    </head>
    <body>
        <ul>
            <?php
            foreach ($arrFrutas as $valor){
                ?>
                <li><?= $valor ?></li>
                <?php
            }
            ?>
        </ul>
    </body>
</html>

<?php

echo "<br><br>";

echo "FOREACH ENCADEADO";//foreach dentro de um foreach

echo "<br><br>";

$arrNotas = [
    "aluno1" => [
        "nome" => "Gunar",
        "nota" => 7
    ],
    "aluno2" => [
        "nome" => "Lucia",
        "nota" => 10
    ],
    "aluno3" => [
        "nome" => "Natalia",
        "nota" => 0
    ],
    "aluno4" => [
        "nome" => "Fernando",
        "nota" => 9
    ],
];

foreach ($arrNotas as $aluno){
    foreach ($aluno as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}

?>