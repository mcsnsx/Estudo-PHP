<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "REMOVENDO ARQUIVOS";

echo "<br><br>";

if (!is_dir("images"))mkdir ("images");

foreach (scandir("images") as $item) {
    if(!in_array($item, array(".", ".."))){
        unlink("images/" . $item);
    }
}

echo "Ok!";

?>