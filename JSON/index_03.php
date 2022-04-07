<?php 

echo "BUSCANDO DADOS COM CEP E RETORNANDO COM JSON";

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS ACADEMICOS

echo "<br><br>";

// https://correiosapi.apphb.com/cep/19010010
//pegar o array via api dos correios pelo cep

$cep = filter_input(INPUT_GET, "cep");
$cep = str_replace("-", "", $cep);

//faz uma requisição e retorna em resultado
$str = file_get_contents(
    'https://correiosapi.apphb.com/cep/19010010'. $cep
);
echo $str;

//conversão para array
$arrCidade = json_decode($str);

var_dump($arrCidade);

if($arrCidade != null){
echo "<p><b>CEP: </b>" . $arrCidade -> cep . "</p>";
echo "<p><b>Tipo de Logradouro: </b>" . $arrCidade -> tipoLogradouro . "</p>";
echo "<p><b>Bairro: </b> " . $arrCidade -> bairro . "</p>";
echo "<p><b>Cidade: </b> " . $arrCidade -> cidade . "</p>";
echo "<p><b>Estado: </b> " . $arrCidade -> estado . "</p>";
}

?>