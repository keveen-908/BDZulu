<?php

    include_once('config.php');
    switch ($_REQUEST['acao']) {
        case 'editar':
            
            $dirUploads = "../uploads/";

           

            $files = $_FILES['fotos'];


            $names= $files['name'];
            $tmp_name = $files['tmp_name'];
            
            foreach($names as $index => $name ){
                $extensao = pathinfo($name, PATHINFO_EXTENSION);
                $newName = uniqid().DIRECTORY_SEPARATOR.$extensao;
                move_uploaded_file($tmp_name[$index], $dirUploads.$newName);
            }
    

            $nomeOp = $_POST['operacao'];
            $missao = $_POST['missao'];
            $estado = $_POST['estado'];
            $cma = $_POST['cma'];
            $rm = $_POST['rm'];
            $comandoOp = $_POST['comandoOp'];
            $comandoApoio = $_POST['comandoApoiado'];
            $inicioOp = $_POST['inicioOp'];
            $fimOp = $_POST['fimOp'];

            $efetivo = $_POST['participantes'];
            $efetivoEb = $_POST['participantesEb'];
            $efetivoMb = $_POST['participantesMb'];
            $efetivoFab = $_POST['participantesFab'];
            $efetivoOs = $_POST['participantesOs'];
            $efetivoGov = $_POST['participantesGov'];
            $efetivoPv = $_POST['participantesPv'];
            $efetivoCv = $_POST['participantesCv'];

            $acao_apoio = $_POST['acaoOuApoio'];
            $transporte = $_POST['transporte'];
            $desTransporte = $_POST['desTransporte'];
            $manuntecao = $_POST['manutencao'];
            $desManuntencao = $_POST['desManutencao'];
            $suprimento = $_POST['suprimento'];
            $desSuprimento = $_POST['desSuprimento'];
            $aviacao = $_POST['aviacao'];
            $desAviacao = $_POST['desAviacao'];
            
            $recebidos = $_POST['recebidos'];
            $descentralizados = $_POST['descentralizados'];
            $liquidados = $_POST['liquidados'];
            $devolvidos = $_POST['devolvidos'];
            
            
            $outrasInfos = $_POST['outrasInfos'];
            $sintaseOp = $_POST['sintase'];


            $sql = "UPDATE operacao SET 
            operacao = '{$nomeOp}',
            missao = '{$missao}',
            estado = '{$estado}',
            cma = '{$cma}',
            rm = '{$rm}',
            comandoOp = '{$comandoOp}',
            comandoApoio = '{$comandoApoio}',
            inicioOp = '{$inicioOp}',
            fimOp = '{$fimOp}'
            WHERE opid = {$_REQUEST['id']}";

            $resOp = $mysqli->query($sql) or die($mysqli->error);


            $sql2 = "UPDATE efetivo SET 
            participantes = '{$efetivo}',
            participantesEb = '{$efetivoEb}',
            participantesMb = '{$efetivoMb}',
            participantesFab = '{$efetivoFab}',
            participantesOs = '{$efetivoOs}',
            participantesGov = '{$efetivoGov}',
            participantesPv = '{$efetivoPv}',
            participantesCv = '{$efetivoCv}'
            WHERE eid = {$_REQUEST['id']}";

            $resEf = $mysqli->query($sql2) or die($mysqli->error);

            $sql3 = "UPDATE tipoOp SET 
            acaoOuApoio = '{$acao_apoio}',
            transporte = '{$transporte}',  
            desTransporte = '{$desTransporte}',
            manutencao = '{$manuntecao}',
            desManutencao = '{$desManuntencao}',
            suprimento = '{$suprimento}',
            desSuprimento = '{$desSuprimento}',
            aviacao = '{$aviacao}',
            desAviacao = '{$desAviacao}'
            WHERE tid = {$_REQUEST['id']}";

            $resTpOp = $mysqli->query($sql3) or die($mysqli->error);

            $sql4 = "UPDATE recursos SET 
            recebidos = '{$recebidos}',
            descentralizados = '{$descentralizados}',
            liquidados = '{$liquidados}',
            devolvidos = '{$devolvidos}'
            WHERE rid = {$_REQUEST['id']}";

            $resRecur = $mysqli->query($sql4) or die($mysqli->error);

            $sql5 = "UPDATE infos SET 
            outrasInfos = '{$outrasInfos}',
            sintaseOp = '{$sintaseOp}'
            WHERE iid = {$_REQUEST['id']}";

            $resInf = $mysqli->query($sql5) or die($mysqli->error);

            if($resOp === TRUE && $resEf === TRUE && $resTpOp === TRUE && $resRecur === TRUE && $resInf === TRUE){
                echo "
                <script>
                alert('Operação atualizada com sucesso!');
                window.opener.location.reload(); // Atualiza a tela principal (index)
                window.close(); // Fecha a aba de edição
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Não foi possível editar!');
                window.opener.location.reload(); // Atualiza a tela principal (index)
                window.close(); // Fecha a aba de edição
                </script>
                ";
            }
            
            break;
        
        case 'excluir':

           $mysqli->begin_transaction();

           $id= $_REQUEST['id'];
           try {
                $sql = "DELETE FROM operacao WHERE opid = {$_REQUEST['id']}";
                $resOp = $mysqli->query($sql);
                if ($resOp === FALSE) {
                    echo "Erro ao excluir da tabela 'operacao': " . $mysqli->error;
                }
                
                $sql2 = "DELETE FROM logins WHERE lid = {$_REQUEST['id']}";
                $resLog = $mysqli->query($sql2);
                if ($resLog === FALSE) {
                    echo "Erro ao excluir da tabela 'logins': " . $mysqli->error;
                }

                $sql2 = "DELETE FROM efetivo WHERE eid = {$_REQUEST['id']}";
                $resEf = $mysqli->query($sql2);
                if ($resEf === FALSE) {
                    echo "Erro ao excluir da tabela 'efetivo': " . $mysqli->error;
                }

                $sql2 = "DELETE FROM recursos WHERE rid = {$_REQUEST['id']}";
                $resRec = $mysqli->query($sql2);
                if ($resOp === FALSE) {
                    echo "Erro ao excluir da tabela 'recursos': " . $mysqli->error;
                }

                $sql2 = "DELETE FROM tipoOp WHERE tid = {$_REQUEST['id']}";
                $resTipoOp = $mysqli->query($sql2);
                if ($resTipoOp === FALSE) {
                    echo "Erro ao excluir da tabela 'tipoop': " . $mysqli->error;
                }

                $sql2 = "DELETE FROM anexos WHERE aid = {$_REQUEST['id']}";
                $resAnexo = $mysqli->query($sql2);
                if ($resAnexo === FALSE) {
                    echo "Erro ao excluir da tabela 'anexo': " . $mysqli->error;
                }

                
                $sql2 = "DELETE FROM infos WHERE iid = {$_REQUEST['id']}";
                $resInfo = $mysqli->query($sql2);
                if ($resTipoOp === FALSE) {
                    echo "Erro ao excluir da tabela 'infos': " . $mysqli->error;
                }

                    $mysqli->commit(); // Confirma as inserções
                    echo "
                    <script>
                    alert('Operação atualizada com sucesso!');
                    window.opener.location.reload(); // Atualiza a tela principal (index)
                    window.close(); // Fecha a aba de edição
                    </script>
                    ";
            
                }catch (Exception $e) {
                    $mysqli->rollback();
                    // Exibe o erro detalhado
                    echo "Erro ao excluir dados: " . $e->getMessage();
                    print "<script>alert('Não foi possível Excluir!');</script>";
                    print "<script>location.href = 'index.php';</script>";
                }
                  $mysqli->close();
            break;        
    }
  
?>
<script>
    function fecharGuia() {
    document.getElementById('guia-usuario').style.display = 'none';
    }
</script>