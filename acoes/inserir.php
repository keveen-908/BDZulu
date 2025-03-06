<?php
include 'config.php';


//anexos

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $relatorioFinal = $_FILES["relatorioFinal"];
  $relatorioComando = $_FILES["relatorioComando"];
  $fotos = $_FILES["fotos"];
  $outrasDocumentos = $_FILES["outrasDocumentos"];

  $dirUploads = "../../uploads";

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
  if (!empty($_FILES['fotos']['name'][0])) {
    
    if (move_uploaded_file($fotos["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $fotos["name"])) {
      echo "Upload realizado com sucesso!";
      $fotosName = $fotos["name"];
    } else {
      throw new Exception("Não foi possível reaizar o upload.");
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


//operação

$operacao = $_POST['operacao'];
$estado = $_POST['estado'];
$missao = $_POST['missao'];
$cma = $_POST['cma'];
$rm = $_POST['rm'];
$comandoOp = $_POST['comandoOp'];
$comandoApoio = $_POST['comandoApoiado'];
$inicioOp = $_POST['inicioOp'];
$fimOp = $_POST['fimOp'];

//efetivo

$participantes = $_POST['participantes'];
$participantesEb = $_POST['participantesEb'];
if ($participantesEb == null){
  $participantesEb = 0; 
}
$participantesMb = $_POST['participantesMb'];

if ($participantesMb == null){
  $participantesMb = 0; 
}
$participantesFab = $_POST['participantesFab'];
if ($participantesFab == null){
  $participantesFab = 0; 
}
$participantesOs = $_POST['participantesOs'];
if ($participantesOs == null){
  $participantesOs = 0; 
}
$participantesGov = $_POST['participantesGov'];
if ($participantesGov == null){
  $participantesGov = 0; 
}
$participantesPv = $_POST['participantesPv'];
if ($participantesPv == null){
  $participantesPv = 0; 
}
$participantesCv = $_POST['participantesCv'];
if ($participantesCv == null){
  $participantesCv = 0; 
}


//tipos de operações

$tipoOp = $_POST['tipoOp'];
$acaoOuApoio = $_POST['acaoOuApoio'];
$transporte = $_POST['transporte'];
$manutencao = $_POST['manutencao'];
$suprimento = $_POST['suprimento'];
$aviacao = $_POST['aviacao'];
$desTransporte = $_POST['desTransporte'];
$desManutencao = $_POST['desManutencao'];
$desSuprimento = $_POST['desSuprimento'];
$desAviacao = $_POST['desAviacao'];


//recursos aprovisionados

$recebidos = $_POST['recebidos'];
if ($recebidos == null){
  $recebidos = 0; 
}
$descentralizados = $_POST['descentralizados'];
if ($descentralizados == null){
  $descentralizados = 0; 
}
$liquidados = $_POST['liquidados'];
if ($liquidados == null){
  $liquidados = 0; 
}
$devolvidos = $_POST['devolvidos'];
if ($devolvidos == null){
  $devolvidos = 0; 
}

//outras infos

$outrasInfos = $_POST['outrasInfos'];

// anexos 

$submit= $_POST['submit'];



if ($submit) {

  $usuario = $nomeUsuario;
  /* insere os dados das operacoes */

  $sql = "INSERT INTO operacao (operador, operacao,estado, missao, cma, rm, comandoOp, comandoApoio, inicioOp, fimOp, tipoop) VALUES ('$usuario', '$operacao', '$estado', '$missao','$cma', '$rm', '$comandoOp', '$comandoApoio', '$inicioOp', '$fimOp', '$tipoOp')";

  $mysqli->query($sql);

  /* insere os dados do efetivo */

  $sql = "INSERT INTO efetivo (participantes,participantesEb, participantesMb,participantesFab,participantesOs,participantesGov,participantesPv,participantesCv) VALUES ('$participantes','$participantesEb', '$participantesMb', '$participantesFab', '$participantesOs', '$participantesGov', '$participantesPv', '$participantesCv')";

  $mysqli->query($sql);

  /* insere os dados dos tipos de operacoes */

  $sql = "INSERT INTO tipoOp (tipoOp,acaoOuApoio, transporte, manutencao, suprimento, aviacao, desTransporte, desManutencao, desSuprimento, desAviacao) VALUES ('$tipoOp', '$acaoOuApoio', '$transporte', '$manutencao', '$suprimento', '$aviacao', '$desTransporte','$desManutencao', '$desSuprimento', '$desAviacao')";

  $mysqli->query($sql);

  /* insere os dados dos recursos aprovisionados */

  $sql = "INSERT INTO recursos (recebidos,descentralizados, liquidados, devolvidos) VALUES ('$recebidos', '$descentralizados', '$liquidados', '$devolvidos')";

  $mysqli->query($sql);

  /* insere os dados de outras informacoes */

  $sql = "INSERT INTO infos (outrasInfos) VALUES ('$outrasInfos')";

  $mysqli->query($sql);

    /* insere os dados dos anexos */

  $sql = "INSERT INTO anexos (relatorioFinal,relatorioComando,fotos,outrosDocumentos) VALUES ('$relatorioFinalName','$relatorioComandoName','$fotosName','$outrasDocumentosName')";

  $mysqli->query($sql);

  $data = date('y-m-d H:i:s');
  $sql = "INSERT INTO logins (usuario,operacao, data) VALUES ('$usuario','$operacao', '$data')";
  $mysqli->query($sql);

  header("Location: /index.php?p=inserção");
}

?>