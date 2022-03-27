<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINDS ACADEMICOS..

echo "FUNÇÕES NATIVAS DO PHP";

echo "<br><br>";

//Função 'SUBSTR' - tem três parametros (o terceiro é opcional), modo de exibição de caracteres
$nome = "Maria Carolina";
echo substr($nome, 0, 5); //mostra a quantidade x de caracteres 

echo "<br><br>";

//Função 'STRTOLOWER' - transforma todos os caracteres em caracteres minusculos..
echo strtolower("OLA, COMO VAI?");

echo "<br><br>";

//Função 'STRTOUPPER' - transforma todos os caracteres em caracteres maiusculos..
echo strtoupper("ola, como vai?");

echo "<br><br>";

//Função 'STRIP_TAGS' - remove todas as formas de formatação do html
$msg = strip_tags("<h1>Bem vindo</h1>, acesse o <a href=''><b>link</b></a>");
echo $msg;

echo "<br><br>";

//Função 'STR_REPLACE' - altera alguma informação de dentro da variável
$comida = "Banana, Maçã, Pera, Uva";
$alt = str_replace("Banana", "Morango", $comida);
//               "procura", "substitui", "variável ou a mensagem está"
echo $alt;

echo "<br><br>";

//Função 'STR_IREPLACE' - altera alguma informação de dentro da variável e ignora a variação de caracteres entre minusculos e maiusculos
//Essa função é bastante usada para sensurar palavrões e/ou palavras especificas
$comida1 = "Banana, Maçã, Pera, Uva";
$alt1 = str_ireplace("banana", "morango", $comida1);
//               "procura", "substitui", "variável ou a mensagem está"
echo $alt1;

echo "<br><br>";

//Função 'EXPLODE' - cria um novo array sempre que encontra o priimeiro parametro, nesse caso, o espaço..
$nome2 = "Maria Carolina Nascimento";
$ex = explode(" ", $nome);
echo $ex[0];

echo "<br><br>";

//Função 'STRLEN' controla a quantidade de caracteres
$nome3 = "Fulano da Silva Sauro";

if (strlen($nome3) <= 10){
    echo "Válido";
}else{
    echo "Invalido";
}

?>