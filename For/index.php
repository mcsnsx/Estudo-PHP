<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS..

echo "FOR";

echo "<br><br>";

echo "De 0 a 9";
echo "<br><br>";


for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

echo "<br><br>";

echo "De 0 a 1000, de 5 em 5";
echo "<br><br>";

for ($f = 0; $f < 1000; $f+=5) {
    if ($f>200 && $f < 800) continue;
    if ($f === 900) break;
    echo $f . "<br>";
}

echo "Anos";
echo "<br><br>";

echo "<select>";

for ($g =  date ("Y"); $g > date ("Y") - 100; $g--) {
    echo '<option value="' . $g . '">' . $g . '<option><br>';
}

echo "</select>";

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