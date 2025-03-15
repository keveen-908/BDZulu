<?php
include 'config.php';


// Inicia a transação
$mysqli->begin_transaction();

try {

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

    $tipoOp = $funcao;
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
    $sinteseOp = $_POST['sintase'];

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

      $sql = "INSERT INTO infos (outrasInfos,sintaseOp) VALUES ('$outrasInfos', '$sinteseOp')";

      $mysqli->query($sql);

        /* insere os dados dos anexos */

      $sql = "INSERT INTO anexos (relatorioFinal,relatorioComando,fotos,outrosDocumentos) VALUES ('$relatorioFinalName','$relatorioComandoName','$fotosName','$outrasDocumentosName')";

      $mysqli->query($sql);

      $data = date('y-m-d H:i:s');
      $sql = "INSERT INTO logins (nome,operacao, data) VALUES ('$usuario','$operacao', '$data')";
      $mysqli->query($sql);

      $mysqli->commit(); // Confirma as inserções

      header("Location: /index.php?p=inserção");
    }
  }  catch (Exception $e) {
    // Se der qualquer erro, desfaz tudo
    $mysqli->rollback();
    // OU só exibe o erro
    echo "Erro ao inserir dados: " . $e->getMessage();

  

  }
  
  

$mysqli->close();

?>