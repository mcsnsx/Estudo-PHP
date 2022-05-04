<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "MANIPULANDO DIRETÓRIOS";

echo "<br><br>";

//scandir ---> escaneia o diretorio e retorna um array
$images = scandir("images");

$data = array();

foreach ($images as $img) {
    //in_array---> faz uma busca dentro do array
    //needle ---> onde vc esta procurando [alvo]
    if (!in_array($img, array (".", ".."))){
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);
        $info ["size"] = filesize($filename); //-->tamanho do arquivo
        $info ["modified"] = date ("d/m/Y H:i:s", filemtime($filename));//data de modificação do arquivo
        $info ["url"] = "http://localhost/Curso-php-completo/Dir/". str_replace("\\", "/", /*arruma a barra*/ $filename);
        array_push($data, $info);
    }
}

echo json_encode($data);

?>