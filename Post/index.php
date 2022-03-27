<?php

//NÃO USAR <BR>, ESTOU USANDO AQUI APENAS PARA FINS ACADEMICOS..

echo "POST";

echo "<br><br>";

//MÉTODO 1
/*$arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
$nome = "";
$email = "";
$funcionario = "";

if(isset($_POST["txtNome"])){
    $nome = $_POST ["txtNome"];

}

if(isset($_POST["txtEmail"])){
    $email = $_POST ["txtEmail"];
}

if(isset($_POST["slFuncionario"])){
    $funcionario = $arrayNome [$_POST ["slFuncionario"]];
}

echo "<br><br>"; */

//MÉDOTO 2 - Filtra os dados para que os campo não sejam preenchidos com qualquer tipo de caracter
$arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
$nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);;
$funcionariocOD = filter_input(INPUT_POST, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

if(isset($_POST["txtNome"])){
    $nome = $_POST ["txtNome"];

}

if(isset($_POST["txtEmail"])){
    $email = $_POST ["txtEmail"];
}

if(isset($_POST["slFuncionario"])){
    $funcionario = $arrayNome [$_POST ["slFuncionario"]];
}

if ($funcionariocOD){
    $funcionario = $arrayNome[$funcionariocOD];
}

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
    <form method="post">
        <ul>
            <li>Nome: <input type="text" name="txtNome" /></li>
            <li>Email: <input type="text" name="txtEmail" /></li>
            <li>Funcionário:
                <select name="slFuncionario">
                    <?php
                    for ($i = 0; $i < count($arrayNome); $i++) {
                    ?>
                        <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Cadastrar" /></li>
        </ul>
    </form>
    <br><hr><br>
    <p>Nome: <?= $nome; ?></p>
    <p>Email: <?= $email; ?></p>
    <p>Funcionario: <?= $funcionario; ?></p>
</body>

</html>