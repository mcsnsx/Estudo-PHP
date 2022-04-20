<?php

echo "AJAX";

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

//AJAX significa Asynchronous JavaScript e XML, é o uso do objeto XMLHttpRequest para se comunicar com os scripts do lado do servidor
//Recebe vários formatos (JSON, XML, HTML e até TXT)
//é assincrono, pode fazer tudo sem a necessidade de atuaolizar a pag (permite atualizar parte da pag com base nos eventos do usuario)

?>

<!doctype HTML>
<html lang="pt-br">
<head>
    <title>AJAX</title>
    <meta charset="utf-8"/>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</head>

<body>
    <div class="container">
        <h1>
            AJAX com PHP
        </h1>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="txtNome">Nome Completo</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Nome compelto">
                </div>
            </div>    
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" id="txtEmail" placeholder="Email principal">                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                <label for="txtTelefone">Telefone</label>
                <input type="text" class="form-control" id="txtTelefone" placeholder="(00)00000-0000">                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                <button id="btnCadastrar" class="btn btn-info">Cadastrar</button>                   
                </div>
            </div>
        </div>

        <!--CONSULTA-->
        <div class="card">
            <div class="card-header">
                <blockquote class="blockquote mb-0">
                    <p>Faça sua consulta aqui.</p>
                </blockquote>
            </div>
        </div>
    </div>
</body>

</html>