<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS..

echo "FOR";

echo "<br><br>";

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>For</title>
</head>

<body>
    <ul>
        <?php
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j <= 10; $j++){
        ?>
            <li><?= $i ?> * <?= $j; ?> = <?= ($i * $j); ?></li>
        <?php
        }
        echo "<br>";
    }
        ?>

    </ul>
</body>

</html>