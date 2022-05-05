<?php
//Tudo for enviado no formulário, será enviado como dados binários

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "DOWNLOAD";

echo "<br><br>";

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

//file_get_contents ---> pega o conteudo do arquivo
$content = file_get_contents($link);

//var_dump($content);
//parse_url ---> transforma o que está vindo da URl em um arquivo real
$parse = parse_url($link);

$basename = basename ($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">