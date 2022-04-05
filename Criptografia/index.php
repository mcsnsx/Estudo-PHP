<?php 

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS..

echo "CRIPTOGRAFIA <br><br>";

//SHA 1 ---> gera uma chave sem volat com 40 caracteres
$s = sha1("Olá, mundo!");
echo $s;

echo "<br><br>";

//MD5 ---> gera uma chave sem volta com 32 caracteres
$m = md5("PHP intermediario");
echo $m;

echo "<br><br>";

//BASE64_ENCODE ---> criptografa uma string, porem permite retornar ao valor
$b = base64_encode("criptografias");
echo $b;

echo "<br><br>";

//BASE64_DECODE ---> retorna o valor original de uma string criptografada em base64
echo base64_decode($b);

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <style>
            ul{
                list-style: none;
            }
            input, select{
                padding: 5px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <ul>
                <li>Usuário: <input type="text" name="txtUsuario"/></li>
                <li>Senha: <input type="password" name="txtSenha2"/></li>
                <li><input type="submit" name="btnSubmit" value="Entrar">
                    <a href="http://localhost/Curso_PHP/Aula_19/index_2.php">Atualizar</a></li>
            </ul>
        </form>
        <br/>
        <?php 
            echo "Usuario: " . filter_input(INPUT_POST, "txtUsuario", FILTER_SANITIZE_STRING);
            echo "<br/>";
            echo "Senha: " . md5(filter_input(INPUT_POST, "txtSenha2", FILTER_SANITIZE_STRING));
        ?>
    </body>
</html>