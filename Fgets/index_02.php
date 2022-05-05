<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "LENDO IMAGENS";

echo "<br><br>";

$filename = "html5.png";

//file_get_contents ---> realiza o fopen, fwride e fclose tudo de uma vesz só
//base64_encode ---> converte a informação binéria em texto
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" .$mimetype. ";base64," . $base64;

?>

<a href = "<?=$base64encode?>" target="_blank">Link para imagem</a>
<img src="<?=$base64encode?>">