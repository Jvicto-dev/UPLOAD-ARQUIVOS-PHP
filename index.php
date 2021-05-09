<?php

require __DIR__."/vendor/autoload.php";

use App\File\Upload;

if(isset($_FILES['arquivo'])){
    // Instancia de Upload
    $obUpload = new Upload($_FILES['arquivo']);

    // Altera o nome
    // $obUpload->setName("kuigfhsedfui");

    //Gera um nome aleatorio
    $obUpload->generateNewName();

    //Move os arquivos de upload
    $sucesso = $obUpload->Upload(__DIR__.'/files/', false);

    if($sucesso){
        echo "Arquivo <strong>".$obUpload->getBasename()."</strong> enviado com sucesso !";
        exit;
    }

    die("problemas");


}


include __DIR__."/includes/upload.php";
