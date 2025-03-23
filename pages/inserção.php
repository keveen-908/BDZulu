<?php

$error = null;

$tamanhoMaximo = 1024 * 1024 * 5;//5MB

// Inicia a transação
$mysqli->begin_transaction();

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      $relatorioFinal = $_FILES["relatorioFinal"];
      $relatorioComando = $_FILES["relatorioComando"];
      $fotos = $_FILES["fotos"];
      $outrasDocumentos = $_FILES["outrasDocumentos"];

      $relatorioFinalName = null;
      $relatorioComandoName = null;
      $fotosName = null;
      $outrasDocumentosName = null;

    
      $dirUploads = "./uploads";
    
      if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
      }
      $error=false;
      if (!empty($_FILES['relatorioFinal']['name'][0])) {
        if($_FILES['relatorioFinal']['size'] < $tamanhoMaximo){
          if (move_uploaded_file($relatorioFinal["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $relatorioFinal["name"])) {
            $error = "Upload realizado com sucesso!";
            $relatorioFinalName = $relatorioFinal["name"];
          } else {
            throw new Exception("Não foi possível reaizar o upload.");
          }
        }
      }
      if (!empty($_FILES['relatorioComando']['name'][0])) {
        if($_FILES['relatorioComando']['size'] < $tamanhoMaximo){
          if (move_uploaded_file($relatorioComando["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $relatorioComando["name"])) {
            $error = "Upload realizado com sucesso!";
            $relatorioComandoName = $relatorioComando["name"];
          } else {
            throw new Exception("Não foi possível reaizar o upload.");
        
          }
        }
      }
      if (!empty($_FILES['fotos']['name'][0])) {
        if($_FILES['fotos']['size'] < $tamanhoMaximo){
          if (move_uploaded_file($fotos["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $fotos["name"])) {
            $error = "Upload realizado com sucesso!";
            $fotosName = $fotos["name"];
          } else {
            throw new Exception("Não foi possível reaizar o upload.");
          }
        }
      }
      if (!empty($_FILES['outrasDocumentos']['name'][0])) {
        if($_FILES['outrasDocumentos']['size'] < $tamanhoMaximo){
          if (move_uploaded_file($outrasDocumentos["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $outrasDocumentos["name"])) {

            $error = "Upload realizado com sucesso!";
            
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


    }
    }
  }  catch (Exception $e) {
    // Se der qualquer erro, desfaz tudo
    $mysqli->rollback();
    // OU só exibe o erro
    echo "Erro ao inserir dados: " . $e->getMessage();

  

  }
  
  

$mysqli->close();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Inserção</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 60%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        /* Estilo das abas */
        .tab {
            display: flex;
            border-bottom: 2px solid #ddd;
            justify-content: center;
        }
        .tab button {
            flex: 1;
            padding: 12px;
            cursor: pointer;
            background-color: #f4f4f4;
            border: none;
            border-bottom: 2px solid transparent;
            font-size: 16px;
            transition: 0.3s;
        }
        .tab button:hover, .tab button.active {
            background-color: #ddd;
            border-bottom: 2px solid #28a745;
            transition: 0.3s;
        }
        /* Conteúdo das abas */
        .tab-content {
            display: none;
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            background-color: white;
            border-radius: 0 0 10px 10px;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }
        .tab-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        /* Estilo dos inputs */
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            font-size: 16px;
            transition: background 0.3s ease-in-out;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>             
<body>
    
    <div class="container">
        <h2 style="text-align:center;">Cadastro de Operação</h2>

        <form method="POST" enctype="multipart/form-data">
            <?php echo $error."<br>";?>

            <!-- Menu de Abas -->
            <div class="tab">
                <button type="button" class="tablinks active" onclick="openTab(event, 'dados')">Dados da Operação</button>
                <button type="button" class="tablinks" onclick="openTab(event, 'efetivo')">Efetivo</button>
                <button type="button" class="tablinks" onclick="openTab(event, 'tipos')">Tipos de Operação</button>
                <button type="button" class="tablinks" onclick="openTab(event, 'recursos')">Recursos Provisionados</button>
                <button type="button" class="tablinks" onclick="openTab(event, 'outras')">Informações</button>
                <button type="button" class="tablinks" onclick="openTab(event, 'anexos')">Anexos</button>
            </div>

            <!-- Seção 1: Dados da Operação -->
            <div id="dados" class="tab-content active">
            
                <label for="operacao">Nome da Operação:</label>
                <input id="input" type="text" name="operacao" id="operacao" placeholder="Operação" required>

                <label for="estado">Estado(UF):</label>
                <select id="input" id="estado" name="estado" class="" required>
                    <option value="">Selecione o estado</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                    <option value="Internacional">Internacional</option>
                </select>

                <label for="missao">Missão:</label>
                <input id="input" type="text" name="missao" placeholder="Missão" id="missao" required>

                
        
                <label for="comando">Comando Militar de Área:</label>
                <select id="input" id="comando" name="cma" class="" required>
                    <option value="">Selecione o Comando Militar de Área</option>
                    <option value="Comando Militar da Amazônia">Comando Militar da Amazônia</option>
                    <option value="Comando Militar do Leste">Comando Militar do Leste</option>
                    <option value="Comando Militar do Planalto">Comando Militar do Planalto</option>
                    <option value="Comando Militar do Norte">Comando Militar do Norte</option>
                    <option value="Comando Militar do Nordeste">Comando Militar do Nordeste</option>
                    <option value="Comando Militar do Oeste">Comando Militar do Oeste</option>
                    <option value="Comando Militar do Sudeste">Comando Militar do Sudeste</option>
                    <option value="Comando Militar do Sul">Comando Militar do Sul</option>
                </select>
              
                <label for="rm">Região Militar:</label>
                <select id="input" id="rm" name="rm" class="" required>
                    <option value=""> Selecione a Região Militar</option>
                    <option value="1ª região militar">1ª região militar</option>
                    <option value="2ª região militar">2ª região militar</option>
                    <option value="3ª região militar">3ª região militar</option>
                    <option value="4ª região militar">4ª região militar</option>
                    <option value="5ª região militar">5ª região militar</option>
                    <option value="6ª região militar">6ª região militar</option>
                    <option value="7ª região militar">7ª região militar</option>
                    <option value="8ª região militar">8ª região militar</option>
                    <option value="9ª região militar">9ª região militar</option>
                    <option value="10ª região militar">10ª região militar</option>
                    <option value="11ª região militar">11ª região militar</option>
                    <option value="12ª região militar">12ª região militar</option>
                </select>

                <label for="comandoOp">Comando da Operação:</label>
                <input id="input" type="text" name="comandoOp" placeholder="Comando da Operação" id="comandoOp" required>
                
                <label for="OrgApoiada">Organização Apoiada:</label>
                <input id="input" type="text" name="comandoApoiado" placeholder="Organização Apoiada" id="OrgApoiada" required>
                
                <label for="inicioOp">Ínicio da operação:</label>
                <input id="input" type="date" name="inicioOp" id="inicioOp" required>
                
                <label for="terminoOp">Término da operação:</label>
                <input id="input" type="date" name="fimOp" id="terminoOp" required>
            </div>

            <!-- Seção 2: Efetivo -->
            <div id="efetivo" class="tab-content">

                <label for="efetivoTotal">EB,Outras Forças, Outras Agências, e/ou Outras Organizações:</label>
                <input id="input" type="text" name="participantes" placeholder="EB,Outras Forças, Outras Agências, e/ou Outras Organizações:" id="efetivoTotal" required>

                <label for="efetivoEb">Efetivo Exército Brasileiro:</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesEb" id="efetivoEb" required>

                <label for="efetivoMa">Efetivo Marinha do Brasil :</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesMb" id="efetivoMa" required>
                
                <label for="efetivoFAB">Efetivo Força Aérea Brasil :</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesFab" id="efetivoFAB" required>
                
                <label for="efetivoOrgSeg">Efetivo Órgãos de Segurança e Ordenamento Pública:</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesOs" id="efetivoOrgSeg" required>

                <label for="efetivoAgencia">Efetivo de outras Agências Governamentais:</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesGov" id="efetivoAgencia" required>

                <label for="efetivoPriv">Efetivo de outras Agências Privadas:</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesPv" id="efetivoPriv" required>

                <label for="efetivoNaoGov">Efetivo de Organizações Não-Governamentais:</label>
                <input id="input" type="number" placeholder="Quantidade:0" name="participantesCv" id="efetivoNaoGov" required>  
            </div>

            <!-- Seção 3: Tipos de Operação--> 
            
            <div id="tipos" class="tab-content">
                <label for="tipo_operacao">Tipo de Operação:</label>
                    <input id="input" id="tipo_operacao" name="tipoOp" value="<?php echo $funcao;?>" disabled >
                
                <label for="">Tipo de ação ou apoio:</label>
                <select id="input" id="" name="acaoOuApoio" class="" required>
                    <option value="">Selecione o tipo de Ação ou Apoio</option>
                    <option value="Logística para Operações de Garantia da Soberania">Logística para Operações de Garantia da Soberania</option>
                    <option value="Logística de Apoio a Operações Garantia da Lei e da Ordem (GLO)">Logística de Apoio a Operações Garantia da Lei e da Ordem (GLO)</option>
                    <option value="Logística de Apoio a Garantia da Votação e Apuração (GVA)">Logística de Apoio a Garantia da Votação e Apuração (GVA)</option>
                    <option value="Logística de Apoio a Defesa Civil">Logística de Apoio a Defesa Civil</option>
                    <option value="Logística de Apoio as Ações Aubsidiárias">Logística de Apoio as Ações Aubsidiárias</option>
                    <option value="Logística de Apoio a Operações Internacionais">Logística de Apoio a Operações Internacionais</option>
                </select>
                <hr>
                <label for="apoioDesempenhado">Ação ou Apoio Desempenhado:</label>
                <br>
                <label for="">Transporte:</label>
                <select id="input" id="" name="transporte" class="" >
                    <option value="">Selecione a Classe</option>
                    <option value="Classe I">Classe I</option>
                    <option value="Classe II">Classe II</option>
                    <option value="Classe III">Classe III</option>
                    <option value="Classe VI">Classe IV</option>
                    <option value="Classe V">Classe V</option>
                    <option value="Classe VI">Classe VI</option>
                    <option value="Classe VII">Classe VII</option>
                    <option value="Classe VIII">Classe VIII</option>
                    <option value="Classe IX">Classe IX</option>
                    <option value="Classe X">Classe X</option>
                    <option value="Mais de uma Classe">Mais de uma Classe</option>
                </select>

                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desTransporte"  id="" placeholder="Transporte" > 

                <label for="">Manunteção:</label>
                <select id="input" id="" name="manutencao"  class="">
                <option value="">Selecione a Classe</option>
                    <option value="Classe I">Classe I</option>
                    <option value="Classe II">Classe II</option>
                    <option value="Classe III">Classe III</option>
                    <option value="Classe VI">Classe IV</option>
                    <option value="Classe V">Classe V</option>
                    <option value="Classe VI">Classe VI</option>
                    <option value="Classe VII">Classe VII</option>
                    <option value="Classe VIII">Classe VIII</option>
                    <option value="Classe IX">Classe IX</option>
                    <option value="Classe X">Classe X</option>
                    <option value="Mais de uma Classe">Mais de uma Classe</option>
                </select>
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desManutencao" id=""  placeholder="Manuntenção" > 

                <label for="">Suprimento:</label>
                <select id="input" id="" name="suprimento"  class="">
                <option value="">Selecione a Classe</option>
                    <option value="Classe I">Classe I</option>
                    <option value="Classe II">Classe II</option>
                    <option value="Classe III">Classe III</option>
                    <option value="Classe VI">Classe IV</option>
                    <option value="Classe V">Classe V</option>
                    <option value="Classe VI">Classe VI</option>
                    <option value="Classe VII">Classe VII</option>
                    <option value="Classe VIII">Classe VIII</option>
                    <option value="Classe IX">Classe IX</option>
                    <option value="Classe X">Classe X</option>
                    <option value="Mais de uma Classe">Mais de uma Classe</option>
                </select>
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desSuprimento"  id="" placeholder="Suprimento" > 

                <label for="">Aviação:</label>
                <select id="input" id="" name="aviacao"  class="">
                <option value="">Selecione a Classe</option>
                    <option value="Classe I">Classe I</option>
                    <option value="Classe II">Classe II</option>
                    <option value="Classe III">Classe III</option>
                    <option value="Classe VI">Classe IV</option>
                    <option value="Classe V">Classe V</option>
                    <option value="Classe VI">Classe VI</option>
                    <option value="Classe VII">Classe VII</option>
                    <option value="Classe VIII">Classe VIII</option>
                    <option value="Classe IX">Classe IX</option>
                    <option value="Classe X">Classe X</option>
                    <option value="Mais de uma Classe">Mais de uma Classe</option>
                </select>
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desAviacao"  id="" placeholder="Aviação" > 
            
            </div>

            <!-- Seção 4: Recursos Provisionados -->
            <div id="recursos" class="tab-content">

            <label for="recebidos">Recebidos (R$):</label>
            <input id="input" type="number" id="recebidos" name="recebidos" required placeholder="R$ 0,00">
            
            <label for="descentralizados">Descentralizados (R$):</label>
            <input id="input" type="number" id="descentralizados" name="descentralizados" required placeholder="R$ 0,00">
            
            <label for="liquidados">Liquidados (R$):</label>
            <input id="input" type="number" id="liquidados" name="liquidados" required placeholder="R$ 0,00">
            
            <label for="devolvolvidos">Devolvolvidos (R$):</label>
            <input id="input" type="number" id="devolvolvidos" name="devolvidos" required placeholder="R$ 0,00">

            </div>

            <!-- Seção 5: Outras Informações -->
            <div id="outras" class="tab-content">
                <label for="op"> Síntese da Operação:</label>
                <textarea name="sintase" id="input" required rows="2"></textarea>
                <hr>
                <label for="informacoes"> Outras Informações:</label>
                <textarea name="outrasInfos" id="input" rows="4"></textarea>
            </div>
            

            <!-- Seção 6: Anexos -->
            <div id="anexos" class="tab-content">
                <label for="relatorioFinal">Relatório Final:</label>
                <input class="input" type="file" name="relatorioFinal" id="relatorioFinal" onchange="validarTamanhoArquivo('relatorioFinal')">

                <label for="relatorioComando">Relatório do Comando Logístico:</label>
                <input class="input" type="file" name="relatorioComando" id="relatorioComando" onchange="validarTamanhoArquivo('relatorioComando')">

                <label for="fotos">Anexar fotos:</label>
                <input class="input" type="file" name="fotos" id="fotos" onchange="validarTamanhoArquivo('fotos')">

                <label for="outrasDocumentos">Anexar Documento:</label>
                <input class="input" type="file" name="outrasDocumentos" id="outrosDocs" onchange="validarTamanhoArquivo('outrosDocs')">

            </div>

            <!-- Botão de Envio -->
            <input id="input" type="submit" name="submit" class="submit-btn"></input>

        </form>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            
            // Obtém todas as abas
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
                tabcontent[i].style.display = "none"; // Esconde todas
            }

            // Obtém todos os botões de abas e remove a classe "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }

            // Exibe a aba correta com animação
            var currentTab = document.getElementById(tabName);
            currentTab.style.display = "block";
            setTimeout(() => {
                currentTab.classList.add("active");
            }, 10); // Pequeno delay para a animação funcionar

            evt.currentTarget.classList.add("active");
        }

        // Exibir a primeira aba por padrão
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("dados").style.display = "block";
        });



        const fields = document.querySelectorAll("#input")
        function ValidateField(field) {
            // logica para verificar se existem erros
            function verifyErrors() {
                let foundError = false;

                for(let error in field.validity) {
                    // se não for customError
                    // então verifica se tem erro
                    if (field.validity[error] && !field.validity.valid ) {
                        foundError = error
                    }
                }
                return foundError;
            }
            return function() {

                const error = verifyErrors()

                if(error) {
                    field.style.borderColor = "red"
                } else {
                    field.style.borderColor = "Lime "
                }
            }
        }

        function customValidation(event) {

            const field = event.target
            const validation = ValidateField(field)

            validation()

        }

        for( field of fields ){
            field.addEventListener("invalid", event => { 
                customValidation(event)
            })
            field.addEventListener("blur", customValidation)
        }

        function validarTamanhoArquivo(seletorCampo)
        {
        // Receber o valor do campo
        var imagem = document.getElementById(seletorCampo);
        //console.log(imagem.files[0].size);

        // Tamanho máximo do arquivo 2mb
        if(imagem.files[0].size > (1024 * 1024 * 2)){

            // Apresentar a mensagem de erro
            alert("Tamanho máximo permitido do arquivo é 2mb.");

            // Limpar o campo arquivo
            imagem.value = '';
            //(imagem ? imagem.value = '' : null)
        }
        }
    </script>
</body>
</html>
