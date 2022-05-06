<?php 
/*
//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "GD - GRAFIC DESIGN";
//Biblioteca para criação de imagens

echo "<br><br>";
*/
//header --->gera imagens
header('Content-Type: image/png');

//imagecreate ---> ferramenta que "desenha", recebe largura e altura da tela
$image = imagecreate(256, 256); //não é necessário colocar 'px'

//imagecolorallocate ---> responsavel pelas cores cores
//$cor = imagecolorallocate(image, red, green, blue);
$black = imagecolorallocate($image, 0, 0, 0); //preto
$red = imagecolorallocate($image, 255, 0, 0); //vermelho

//imagestring ---> escreve na tela
//imagestring(image, font, x, y, string, color);
imagestring($image, 5, 60, 120, "Curso PHP - 7", $red);

//imagepng ---> indica o tipo de imagem, nesse caso, png
imagepng($image);

//destroi a variável pra que ela não fique "pendurada no php
imagedestroy($image);

?>