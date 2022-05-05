
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">
    <button type="submit">Send</button>

</form>

<?php
//Tudo for enviado no formulário, será enviado como dados binários

//NÃO SE USA <BR>, ESTOU USANDO AQUI PARA FINS EDUCACIONAIS

echo "ENVIANDO ARQUIVOS";

echo "<br><br>";

if($_SERVER ["REQUEST_METHOD"] === "POST"){
    $file = $_FILES["fileUpload"];
    if($file["error"]){
        //mensagem de erro
        throw new Exception("Error: " . $file["error"]);
        
    }

    $dirUploads = "Upload";

    if (!is_dir($dirUploads)){
        mkdir ($dirUploads);
    }
    //função para fazer o upload
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo "Upload realizado com sucesso!";
    } else {
        throw new Exception("Não foi possivel fazer upload");
    }
    


}

?>