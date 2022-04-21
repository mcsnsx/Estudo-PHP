<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "FUNÇÕES";

echo "<br><br>";
//O escopo é definido pelas chaves '{}', fora delas temos o scopo global

//Função simples
function Ola (){
    return "Olá, Mundo!";
}

$v = Ola();
echo $v;

echo "<br><br>";

//Função com parametros
function Ola2 ($nome, $email){
    return "Olá, meu nome é: {$nome} e meu email é: {$email}";
}

$v2 = Ola2("Maria", "maria@email.com");
echo $v2;

echo "<br><br>";

echo "EXEMPLO";

echo "<br><br>";

function Ajuste ($p1, $p2){
    return (($p1 * $p2) / 4);
}

echo "<br><br>";

//GLOBAL -> para um variável que foi declarada dentro de uma funções poder ser lida fora do escopo da função, é necessário que ela seja declarada como uma variável global
$nomeGlobal = "Mac";

function teste(){
    global $nomeGlobal;
    echo $nomeGlobal;
}

teste();

echo "<br><br>";

//só vai funcionar caso eu declare a variável entro do escopo da função
function teste2(){
  //global $nomeGlobal;
    echo $nomeGlobal . " agora no teste 2!";
}

teste2();

echo "<br><br>";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Funções</title>
    </head>
    <body>
 <!--       <h1><?=Ajuste(3, 10);?></h1> -->
        <ul>
            <?php
                for ($i = 0; $i < 10; $i++){
                    ?>
                    <li><?=Ajuste($i, ($i * 6))?></li>
                    <?php
                }
            ?>
        </ul>
    </body>
</html>