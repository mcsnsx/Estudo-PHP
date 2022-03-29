<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI APENAS PARA FINS ACADEMICOS..

echo "GET";

echo "<br><br>";

$arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
$nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_STRING);;
$funcionariocOD = filter_input(INPUT_GET, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

if ($funcionariocOD){
    $funcionario = $arrayNome[($funcionariocOD - 1)];
}

//colocar na barra de endereço no navegador "http://localhost/Get/index.php/?nome=Gunnar"
/*$nome = $_GET["nome"];
echo $nome;

echo "<br><br>";

//colocar na barra de endereço no navegador "http://localhost/Get/index.php/?nome=Gunnar&email=gunnarcorrea@gmail.com"
$email = $_GET["email"];
echo $email; */
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <style>
        ul {
            list-style: none;
        }

        input,
        select {
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form method="get">
        <ul>
            <li>Nome: <input type="text" name="txtNome" /></li>
            <li>Email: <input type="text" name="txtEmail" /></li>
            <li>Funcionário:
                <select name="slFuncionario">
                    <?php
                    for ($i = 0; $i < count($arrayNome); $i++) {
                    ?>
                        <option value="<?= ($i + 1); ?>"><?= $arrayNome[$i]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Cadastrar" />
                <a href="http://localhost/Get/index.php/">Atualizar</a></li>

        </ul>
    </form>
    <br><hr><br>
    <p>Nome: <?= $nome; ?></p>
    <p>Email: <?= $email; ?></p>
    <p>Funcionario: <?= $funcionario; ?></p>
</body>

</html>

