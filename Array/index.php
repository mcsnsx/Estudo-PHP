<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS..

echo "ARRAY";

echo "<br><br>";

$arrayNome = array ("Pedro", "Fernanda", "Lucas", "Marcos", "Joana");
$arrayNomeDois = array ("Valentina", "Fernanda", "Maria", "Cassandra", "Julia", "Luis");
// Assim também funciona --> $arrayNome = ["Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];

//Exibe a quantidade de itens dentro do array
echo count ($arrayNome);

echo "<br><br>";

//Exibir um por um a partir do número do índice
echo $arrayNome[0] . "<br>";
echo $arrayNome[1] . "<br>";
echo $arrayNome[2] . "<br>";
echo $arrayNome[3] . "<br>";
echo $arrayNome[4] . "<br>";

echo "<br><br>";

//Exibir a partir de um FOR, exibe um número determinado de itens do array
for ($i = 0; $i < 5; $i++){
    echo $arrayNomeDois[$i] . "<br>";
}

echo "<br><br>";

///Exibir com a função 'COUNT', exibe todos os itens do array
for ($i = 0; $i < count($arrayNomeDois); $i++){
    echo $arrayNomeDois[$i] . "<br>";
}

echo "<br><br>";

echo "EXEMPLO <br><br>";

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <select id="slProfessores" name="slProfessores">
            <?php
            for ($i = 0; $i < count($arrayNomeDois); $i++){
                ?>
            <option value="<?= $i; ?>"><?= $arrayNomeDois[$i]; ?></option>
            <?php
            }
            ?>
        </select>
        <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
    </body>
</html>


<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS..
echo "<br><br>";

echo "ARRAY ASSOCIATIVO"; //sinal de associação '=>', para atribuir valores específicos

echo "<br><br>";

$arrayNotas = array (
    "aluno1" => 10,
    "aluno2" => 5,
    "aluno3" => 0,
    "aluno4" => 2,
    "aluno5" => 8,
);

echo $arrayNotas["aluno5"];

echo "<br><br>";

$arrayAluno = array (
    "aluno1" => array (
        "nome" => "Maria",
        "nota" => 10
    )
    
);

echo $arrayAluno["aluno1"] ["nota"];

echo "<br><br>";

echo "EXEMPLO"; //sinal de associação '=>', para atribuir valores específicos

echo "<br><br>";

$arr = [];

for ($i = 0; $i <= 100; $i++){
    $arr[] = $i;
}

echo "<br><br>";

for ($i = 0; $i <= 100; $i++){
    echo "2 * {$i} = " . (2 * $arr[$i]) . "<br>";
}

echo "<br><br>";

echo "VETOR";
//VETOR ---> quando se trata de um array sem mais dimensões, apenas uma lista

echo "<br><br>";

$frutas = array (
    "laranja",
    "abacaxi",
    "melancia"
);

//PRINT_R ---> similar ao 'echo'
print_r($frutas);

echo "<br><br>";

echo "ARRAY BIDIMENSIONAL";

echo "<br><br>";

$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco Sport";

echo $carros [0][3];

echo "<br><br>";

echo end($carros[1]);

echo "<br><br>";

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Glaucio',
    'idade'=>25
));

print_r($pessoas[0]['nome']);

?>