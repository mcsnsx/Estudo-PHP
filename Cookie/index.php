<?php 

echo "COOKIE";

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "<br><br>";

/*
//Criando uma cookie
setcookie("nome", "valor", "tempo_de_vida");

echo "<br><br>";

//Obter valor de uma cookie
$_COOKIE["nome"];

echo "<br><br>";

//Alterar o valor de uma cookie
setcookie("nome", "valor_novo");

echo "<br><br>";

//Deletar o cookie
setcookie("nome", "valor", time() - 1);
*/
?>

<?php 

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch($req){
    case 1:
        Criar();
        break;
    case 2:
        Ler();
        break;
    case 3:
        Alterar();
        break;
    case 4:
        Deletar();
        break;
}

function Criar(){
    echo "Criar";
    setcookie("nome", "Gunnar", time() + 100);
}

function Ler(){
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}

function Alterar(){
    echo "Alterar";
    setcookie("nome", "Angelica");
}

function Deletar(){
    echo "Deletar";
    setcookie("nome", "GUnnar", time() -1);
}

?>