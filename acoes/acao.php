<?php

    include_once('config.php');
    switch ($_REQUEST['acao']) {
        case 'editar':
            
            $id = $_REQUEST['id'];
            // Diretório de uploads
            $nome_operacao = $_POST['operacao'];
            $dirOperacao = "../uploads"."/". preg_replace("/[^a-zA-Z0-9_]/", "_", $nome_operacao) . "/"; // Substitui espaços por "_"
            if (!is_dir($dirOperacao)) {
                mkdir($dirOperacao, 0777, true); // Criar a pasta, se não existir
            }
          
            
            function processarArquivo($input_name, $dir, $arquivo_antigo) {
                // Verifica se houve erro no upload do arquivo
                if ($_FILES[$input_name]['error'] !== UPLOAD_ERR_OK) {
                    echo "Erro no upload do arquivo ($input_name): " . $_FILES[$input_name]['error'] . "<br>";
                    return $arquivo_antigo; // Mantém o arquivo antigo para evitar perda de dados
                }
   
                // Garante que a pasta de destino existe
                // SE NAO EXISTIR DIR ELE CRIA UM NOME CAMINHO SETDO NA VARIAVEL $DIR
                if (!is_dir($dir)) {
                    mkdir($dir, 0777, true);
                }
                
                // SE NAO FOR VAZIO ELE CRIA UM NOVO NOME 
                if (!empty($_FILES[$input_name]['name'])) {
                    $extensao = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
                    $novoNome = uniqid() . "." . $extensao;
                    $caminhoCompleto = $dir . $novoNome; // Caminho completo do arquivo
            
                    // Verifica se o arquivo temporário existe antes de mover
                    if (!file_exists($_FILES[$input_name]['tmp_name'])) {
                        echo "Erro: Arquivo temporário não encontrado para $input_name!<br>";
                        return $arquivo_antigo;
                    }
            
                    // Tenta mover o arquivo
                    if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $caminhoCompleto)) {
                        echo "Arquivo movido com sucesso para: $caminhoCompleto<br>";
            
                        // Remove o antigo se o novo foi salvo com sucesso
                        if (!empty($arquivo_antigo) && file_exists($dir . "/" . $arquivo_antigo)) {
                            unlink($dir . "/" . $arquivo_antigo);
                        }
                        return $novoNome;
                    } else {
                        echo "Erro ao mover o arquivo para $caminhoCompleto<br>";
                    }
                } else {
                    echo "Nenhum arquivo foi enviado para $input_name.<br>";
                }
            
                return $arquivo_antigo;
            }

            // Processar relatórios e arquivos diversos
            $relatorioMissao = processarArquivo('relatorioComando', $dirOperacao, $_POST['relatorio_comando_antigo'] ?? '');
            $relatorioFinal = processarArquivo('relatorioFinal', $dirOperacao, $_POST['relatorio_final_antigo'] ?? '');
            $arquivoDiverso = processarArquivo('outrosDocumentos', $dirOperacao, $_POST['arquivo_diverso_antigo'] ?? '');

            // Processar imagens
            $imagens_anteriores = json_decode($_POST['imagens_anteriores'], true);
            $novas_imagens = [];

            if (!empty($_FILES['fotos']['name'][0])) {
                foreach ($_FILES['fotos']['name'] as $index => $name) {
                    $extensao = pathinfo($name, PATHINFO_EXTENSION);
                    $novoNome = uniqid() . "." . $extensao;
            
                    if (move_uploaded_file($_FILES['fotos']['tmp_name'][$index], $dirOperacao . $novoNome)) {
                        $novas_imagens[] = $novoNome;
                    }
                }
            
                // Excluir imagens antigas se novas foram enviadas
                foreach ($imagens_anteriores as $imagem) {
                    unlink($dirOperacao . $imagem);
                }
            } else {
                $novas_imagens = $imagens_anteriores;
            }

            // Atualizar banco de dados
            $fotos_json = json_encode($novas_imagens);

            /* insere os dados dos anexos */
          
            $sql = "UPDATE anexos 
                SET relatorioFinal = '$relatorioFinal', 
                    relatorioComando = '$relatorioMissao', 
                    fotos = '$fotos_json', 
                    outrosDocumentos = '$arquivoDiverso' 
                WHERE aid = $id";

            $resAnexos = $mysqli->query($sql) or die("Erro ao atualizar anexos: " . $mysqli->error);

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

            $status = "completo";
            if(empty($nomeOp) || empty($estado) || empty($missao) || empty($cma) || empty($rm) || empty($comandoOp) || empty($comandoApoio) || empty($inicioOp) || empty($fimOp) || empty($efetivo) || empty($acao_apoio) || empty($transporte) || empty($manuntecao) || empty($suprimento) || empty($aviacao) || empty($desTransporte) || empty($desManuntencao) || empty($desSuprimento) || empty($desAviacao)) {
            $status = "incompleto";
            } 

            $sql = "UPDATE operacao SET 
            operacao = '{$nomeOp}',
            missao = '{$missao}',
            estado = '{$estado}',
            cma = '{$cma}',
            rm = '{$rm}',
            comandoOp = '{$comandoOp}',
            comandoApoio = '{$comandoApoio}',
            inicioOp = '{$inicioOp}',
            fimOp = '{$fimOp}',
            `status` = '{$status}'
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