<?php

$tamanhoMaximo = 1024 * 1024 * 1;//5MB

if ($_SERVER["REQUEST_METHOD"] === "POST") {



    $relatorioFinal = @$_FILES["relatorioFinal"];
    $relatorioComando = @$_FILES["relatorioComando"];
    $fotos = @$_FILES["fotos"];
    $outrasDocumentos = @$_FILES["outrasDocumentos"];
  
    $dirUploads = "/uploads";
  
    if (!is_dir($dirUploads)) {
      mkdir($dirUploads);
    }
    if (!empty($_FILES['relatorioFinal']['name'][0])) {
      
      if (move_uploaded_file($relatorioFinal["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $relatorioFinal["name"])) {
        echo "Upload realizado com sucesso!";
        $relatorioFinalName = $relatorioFinal["name"];
      } else {
        throw new Exception("Não foi possível reaizar o upload.");
      }
    }
    if (!empty($_FILES['relatorioComando']['name'][0])) {
      
      if (move_uploaded_file($relatorioComando["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $relatorioComando["name"])) {
        echo "Upload realizado com sucesso!";
        $relatorioComandoName = $relatorioComando["name"];
      } else {
        throw new Exception("Não foi possível reaizar o upload.");
    
      }
    }
    if (!empty($_FILES['fotos']['name'])) {
        if($_FILES['fotos']['size'] < $tamanhoMaximo){
            echo "erro";
        }else{
                if (move_uploaded_file($fotos["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $fotos["name"])) {
                echo "Upload realizado com sucesso!";
                print_r($fotos);
                $fotosName = $fotos["name"];
              } else {
                throw new Exception("Não foi possível reaizar o upload.");
              }
        }



        }
      

    if (!empty($_FILES['outrasDocumentos']['name'][0])) {
      
      if (move_uploaded_file($outrasDocumentos["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $outrasDocumentos["name"])) {
        echo "Upload realizado com sucesso!";
        $outrasDocumentosName = $outrasDocumentos["name"];
      } else {
        throw new Exception("Não foi possível reaizar o upload.");
      }
    }

}

?>
<form method="POST" enctype="multipart/form-data">

<input type="file" name="fotos" id="">
<input type="submit">

</form>