<?php

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "LENDO ARQUIVOS";

echo "<br><br>";

$filename = "usuarios.csv";

if(file_exists($filename)){
    //'r' --> le o arquivo
    $file = fopen($filename, "r");
    //'fgets' ---> pega a primeira linha do arquivo
    //'explode' ---> explode cada vez que encontra uma virgula e transforma em um array
    $headers = explode(",", fgets($file));

    //var_dump($headers);

    $data = array();

    while($row = fgets($file)){
        $rowData = explode (",", $row);
        $linha = array();

        for ($i = 0; $i < count($headers); $i++){
            $linha[$headers[$i]] = $rowData[$i];
        }
        array_push($data, $linha);
    }
    fclose($file);

    echo json_encode($data);
}

?>