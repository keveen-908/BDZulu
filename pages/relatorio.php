<?php
    include('../acoes/config.php');
    // Recebe o ID da operação pela URL (ex: relatorio.php?id=1)
    $id_operacao = isset($_GET['id']) ? intval($_GET['id']) : 0;

    $operacao = $estado = $missao = $cma = $rm = $comandoOp = $comandoApoiado = $inicioOp = $fimOp = 'Não informado';


    // Consulta Operação
    $sql = "SELECT * FROM operacao WHERE opid = $id_operacao";
    $resultOp = $mysqli->query($sql);
    
    if ($resultOp->num_rows > 0) {
        $row = $resultOp->fetch_assoc();
    
        $operacao = $row['operacao'];
        $estado = $row['estado'];
        $missao = $row['missao'];
        $cma = $row['cma'];
        $rm = $row['rm'];
        $comandoOp = $row['comandoOp'];
        $comandoApoiado = $row['comandoApoio'];
        $inicioOp = $row['inicioOp'];
        $fimOp = $row['fimOp'];
    }
    
    // Consulta Efetivo
    $sql = "SELECT * FROM efetivo WHERE eid = $id_operacao";
    $resultEf = $mysqli->query($sql);
    if ($resultEf->num_rows > 0) {
        $row = $resultEf->fetch_assoc();
    
        $participantes = $row['participantes'];
        $participantesEb = $row['participantesEb'];
        $participantesMb = $row['participantesMb'];
        $participantesFab = $row['participantesFab'];
        $participantesOs = $row['participantesOs'];
        $participantesGov = $row['participantesGov'];
        $participantesPv = $row['participantesPv'];
        $participantesCv = $row['participantesCv'];
    }
    
    // Consulta Tipo de Operação
    $sql = "SELECT * FROM tipoOp WHERE tid = $id_operacao";
    $resultTipoOp = $mysqli->query($sql);
    if ($resultTipoOp->num_rows > 0) {
        $row = $resultTipoOp->fetch_assoc();
    
        @$funcao = @$row['tipoOp'];
        @$acaoOuApoio = @$row['acaoOuApoio'];
        @$transporte = @$row['transporte'];
        @$desTransporte = @$row['desTransporte'];
        @$manutencao = @$row['manutencao'];
        @$desManutencao = @$row['desManutencao'];
        @$suprimento = @$row['suprimento'];
        @$desSuprimento = @$row['desSuprimento'];
        @$aviacao = @$row['aviacao'];
        @$desAviacao = @$row['desAviacao'];
    }
    
    // Consulta Recursos
    $sql = "SELECT * FROM recursos WHERE rid = $id_operacao";
    $resultRec = $mysqli->query($sql);
    if ($resultRec->num_rows > 0) {
        $row = $resultRec->fetch_assoc();
    
        $recebidos = $row['recebidos'];
        $descentralizados = $row['descentralizados'];
        $liquidados = $row['liquidados'];
        $devolvidos = $row['devolvidos'];
    }
    
    // Consulta Informações
    $sql = "SELECT * FROM infos WHERE iid = $id_operacao";
    $resultInfo = $mysqli->query($sql);
    if ($resultInfo->num_rows > 0) {
        $row = $resultInfo->fetch_assoc();
    
        $sintase = $row['sintaseOp'];
        @$outrasInfos = $row['outrasInfos'];
    }
    
    /* Consulta Anexos
    $sql = "SELECT * FROM anexos WHERE aid = $id_operacao";
    $resultAnexo = $mysqli->query($sql);
    if ($resultAnexo->num_rows > 0) {
        $row = $resultAnexo->fetch_assoc();
    
        @$relatorioFinal = $row['relatorioFinal'];
        @$relatorioComando = $row['relatorioComando'];
        @$fotos = $row['fotos'];
        @$outrasDocumentos = $row['outrasDocumentos'];
    }*/

    $sql = "SELECT * FROM anexos WHERE aid = $id_operacao";
    $resultAnexo = $mysqli->query($sql);
    $anexo = $resultAnexo->fetch_assoc();
    
    $relatorioFinal = $anexo['relatorioFinal'];
    $relatorioComando = $anexo['relatorioComando'];
    $outrosDocumentos = $anexo['outrosDocumentos'];
    
    $imagens = json_decode($anexo['fotos'], true); // Converte JSON para array

    $iniData = date("d/m/Y", strtotime($inicioOp));
    $fimData = date("d/m/Y", strtotime($fimOp));

    
    
    $dirOperacao = "../uploads/". preg_replace("/[^a-zA-Z0-9_]/", "_", $operacao) . "/"; 
    
    

    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $operacao; ?></title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1d4ed8;
        }
    </style>
</head>
<body class="container py-5">

    <!-- Logo -->
    <div class="text-center mb-4">
        <img src="../assets/images/logo3.png" alt="Logo da Operação" class="mx-auto mb-4" style="max-width: 350px;">
    </div>

    <h1 class="text-3xl font-bold mb-4 text-center">Relatório da Operação</h1>

    <!-- Seções do Relatório -->
    <div class="space-y-5">

        <!-- Seção 1 -->
        <div class="card p-4 rounded-xl">
            <h2 class="text-2xl font-semibold mb-3">Dados da Operação</h2>
            <p><strong>Nome da Operação:</strong> <?= $operacao; ?></p>
            <p><strong>Estado (UF):</strong> <?= $estado; ?></p>
            <p><strong>Missão:</strong> <?= $missao; ?></p>
            <p><strong>Comando Militar de Área:</strong> <?= $cma; ?></p>
            <p><strong>Região Militar:</strong> <?= $rm; ?></p>
            <p><strong>Comando da Operação:</strong> <?= $comandoOp; ?></p>
            <p><strong>Organização Apoiada:</strong> <?= $comandoApoiado; ?></p>
            <p><strong>Início da Operação:</strong> <?= $iniData; ?></p>
            <p><strong>Término da Operação:</strong> <?= $fimData; ?></p>
        </div>
        <br>
     
        <!-- Seção 2 -->
        <div class="card p-4 rounded-xl">
            <h2 class="text-2xl font-semibold mb-3">Efetivo</h2>
            <p><strong>Participantes:</strong> <?= $participantes; ?></p>
            <p><strong>Exército Brasileiro:</strong> <?= $participantesEb; ?></p>
            <p><strong>Marinha do Brasil:</strong> <?= $participantesMb; ?></p>
            <p><strong>Força Aérea Brasileira:</strong> <?= $participantesFab; ?></p>
            <p><strong>Órgãos de Segurança:</strong> <?= $participantesOs; ?></p>
            <p><strong>Agências Governamentais:</strong> <?= $participantesGov; ?></p>
            <p><strong>Agências Privadas:</strong> <?= $participantesPv; ?></p>
            <p><strong>Organizações Não Governamentais:</strong> <?= $participantesCv; ?></p>
        </div>

        <br>
        <br>
        
        <!-- Seção 3 -->
        <div class="card p-4 rounded-xl">
            <h2 class="text-2xl font-semibold mb-3">Tipos de Operação</h2>
            <p><strong>Função/Tipo:</strong> <?= $funcao; ?></p>
            <p><strong>Ação/Apoio:</strong> <?= $acaoOuApoio; ?></p>
            
            <h3 class="text-xl mt-3">Detalhamento de Apoios</h3>
            <p><strong>Transporte:</strong> <?= $transporte; ?> - <?= $desTransporte; ?></p>
            <p><strong>Manutenção:</strong> <?= $manutencao; ?> - <?= $desManutencao; ?></p>
            <p><strong>Suprimento:</strong> <?= $suprimento; ?> - <?= $desSuprimento; ?></p>
            <p><strong>Aviação:</strong> <?= $aviacao; ?> - <?= $desAviacao; ?></p>
        </div>
        
        <!-- Seção 4 -->
        <div class="card p-4 rounded-xl">
            <h2 class="text-2xl font-semibold mb-3">Recursos Provisionados</h2>
            <p><strong>Recebidos (R$):</strong> <?= $recebidos; ?></p>
            <p><strong>Descentralizados (R$):</strong> <?= $descentralizados; ?></p>
            <p><strong>Liquidados (R$):</strong> <?= $liquidados; ?></p>
            <p><strong>Devolvidos (R$):</strong> <?= $devolvidos; ?></p>
        </div>

        <!-- Seção 5 -->
        <div class="card p-4 rounded-xl">
            <h2 class="text-2xl font-semibold mb-3">Outras Informações</h2>
            <p><strong>Síntese da Operação:</strong></p>
            <p><?= nl2br($sintase); ?></p>
            <p class="mt-3"><strong>Outras Informações:</strong></p>
            <p><?= nl2br($outrasInfos); ?></p>
        </div>

        <!-- Seção 6 -->
        <div class="card p-4 rounded-xl">
            <h2 class="text-2xl font-semibold mb-3">Anexos</h2>
            
               <!-- Exibir link para o Relatório Final -->
            <p><strong>Relatório Final:</strong> 
                <?php if (!empty($relatorioFinal)): ?>
                    <a href="<?php echo $dirOperacao . $relatorioFinal ?>" target="_blank">📄 Abrir Relatório Final</a>
                <?php else: ?>
                    <span>Nenhum Documento Anexado.</span>
                <?php endif; ?>
            </p>

              <!-- Exibir link para o Relatório Final -->
            <p><strong>Relatório Comando Logístico:</strong> 
                <?php if (!empty($relatorioComando)): ?>
                    <a href="<?php echo $dirOperacao . $relatorioComando ?>" target="_blank">📄 Abrir Relatório Comando Logístico</a>
                <?php else: ?>
                    <span>Nenhum Documento Anexado.</span>
                <?php endif; ?>
            </p>

            <!-- Exibir link para outros documentos -->
            <p><strong>Outros Documentos:</strong> 
                <?php if (!empty($outrasDocumentos)): ?>
                    <a href="<?php echo $dirOperacao . $outrasDocumentos ?>" target="_blank">📄 Abrir Outros Documentos</a>
                <?php else: ?>
                    <span>Nenhum Documento Anexado.</span>
                <?php endif; ?>
            </p>

            <!-- Exibir link para as fotos -->
             
            <p><strong>Fotos:</strong>
                    <?php if (!empty($imagens) && is_array($imagens)): ?>
                    <div class="row">
                        <?php foreach ($imagens as $imagem): ?>
                            <?php if (!empty(trim($imagem))): ?>
                                <div class="col-md-3 col-6 mb-3"> <!-- 4 imagens por linha no desktop, 2 no mobile -->
                                    <img src="<?= $dirOperacao . htmlspecialchars($imagem); ?>" 
                                        class="img-fluid rounded shadow-sm" 
                                        style="height: 150px; object-fit: cover; width: 100%;"
                                        alt="Foto da Operação">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p>Nenhuma imagem anexada.</p>
                <?php endif; ?>
            </p>
    </div>
    <BR>
     <!-- Botões -->
     <div class="text-center mb-1">
     <button onclick="window.print()" class="btn btn-success btn-lg px-4 py-3">
  <i class="bi bi-printer-fill" style="font-size: 2rem;"></i>
</button>
    </div>

</body>
</html>
