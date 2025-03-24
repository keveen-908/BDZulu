<?php
    
    include_once('../acoes/config.php');
    $id = $_REQUEST['id'];
    //pesquisa operacao
    $sql = "SELECT * FROM operacao WHERE opid = " . $id;
    $res = $mysqli->query($sql);
    $row = $res->fetch_object();
    //pesquisa efetivo
    $sql = "SELECT * FROM efetivo WHERE eid = " . $id;
    $res = $mysqli->query($sql);
    $rowEfetivo = $res->fetch_object();
    //pesquisa tipos
    $sql = "SELECT * FROM tipoOp WHERE tid = " . $id;
    $res = $mysqli->query($sql);
    $rowTipos = $res->fetch_object();
    //pesquisa recursos
    $sql = "SELECT * FROM recursos WHERE rid = " . $id;
    $res = $mysqli->query($sql);
    $rowRecursos = $res->fetch_object();
    //pesquisa outras   
    $sql = "SELECT * FROM infos WHERE iid = " . $id;
    $res = $mysqli->query($sql);
    $rowInfo = $res->fetch_object();
    
    $outrasinfos = $sintaseOp = $manutencao = $desManutencao = $desAviacao = $desSuprimentos = null;
    
    $sintaseOp = $rowInfo->sintaseOp;
    $outrasinfos = $rowInfo->outrasInfos;
    
    $manutencao=$rowTipos->manutencao;
    $desManutencao=$rowTipos->desManutencao;
    $desAviacao=$rowTipos->desAviacao;
    $desSuprimento=$rowTipos->desSuprimento;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    
    <div class="container table-sm">
        <h1 style="text-align:center;">Editar Operação</h1>

        <form action="../acoes/acao.php" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php print $id;?>">
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
           

                <div class="form-group">
                  <label for="operacao">Nome da Operação:</label>
                  <input id="input" type="text" value="<?php print $row->operacao;?>" name="operacao" id="operacao" maxlength="50" id="descricao" oninput="limitarCaracteres(this,50)" placeholder="Operação" required>

                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

                <label for="estado">Estado(UF):</label>
                <select id="input" id="estado" value="poio" name="estado" class="" required>
                    <option value="<?php print $row->estado;?>"><?php print $row->estado;?></option>
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
                
                <div class="form-group">
                <label for="missao">Missão:</label>
                <input id="input" type="text" name="missao" value="<?php print $row->missao;?>" placeholder="Missão" id="missao" requiredmaxlength="200" id="descricao" oninput="limitarCaracteres(this,200)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

                
        
                <label for="comando">Comando Militar de Área:</label>
                <select id="input" id="comando" name="cma" value="<?php print $row->cma;?>" class="" required>
                    <option value="<?php print $row->cma;?>"><?php print $row->cma;?></option>
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
                <select id="input" id="rm" name="rm" value="<?php print $row->rm;?>" class="" required>
                    <option value="<?php print $row->rm;?>"> <?php print $row->rm;?></option>
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

                <div class="form-group">
                <label for="comandoOp">Comando da Operação:</label>
                <input id="input" type="text" name="comandoOp" value="<?php print $row->comandoOp;?>" placeholder="Comando da Operação" id="comandoOp" requiredmaxlength="100" id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>
                
                <div class="form-group">
                <label for="OrgApoiada">Organização Apoiada:</label>
                <input id="input" type="text" name="comandoApoiado" value="<?php print $row->comandoApoio;?>" placeholder="Organização Apoiada" id="OrgApoiada" required maxlength="100"            id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>
                
                <label for="inicioOp">Ínicio da operação:</label>
                <input id="input" type="date" name="inicioOp" value="<?php print $row->inicioOp;?>" id="inicioOp" required>
                
                <label for="terminoOp">Término da operação:</label>
                <input id="input" type="date" name="fimOp" id="terminoOp" value="<?php print $row->fimOp;?>" required>
            </div>

            <!-- Resolver situacao do"tipo op" -->
            <!--IR COLOCANDO AS PERGUNTAS POR SESSAO E CORRIGINDO ERROS E PESQUISA SQL -->
           <!-- Seção 2: Efetivo -->
           <div id="efetivo" class="tab-content">

                <div class="form-group">
                <label for="efetivoTotal">EB,Outras Forças, Outras Agências, e/ou Outras Organizações:</label>
                <input id="input" type="text" name="participantes" value="<?php print $rowEfetivo->participantes;?>" placeholder="EB,Outras Forças, Outras Agências, e/ou Outras Organizações:" id="efetivoTotal" required maxlength="100" id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

                <label for="efetivoEb">Efetivo Exército Brasileiro:</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesEb;?>" name="participantesEb" id="efetivoEb" required>

                <label for="efetivoMa">Efetivo Marinha do Brasil :</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesMb;?>" name="participantesMb" id="efetivoMa" required>

                <label for="efetivoFAB">Efetivo Força Aérea Brasil :</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesFab;?>" name="participantesFab" id="efetivoFAB" required>

                <label for="efetivoOrgSeg">Efetivo Órgãos de Segurança e Ordenamento Pública:</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesOs;?>" name="participantesOs" id="efetivoOrgSeg" required>

                <label for="efetivoAgencia">Efetivo de outras Agências Governamentais:</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesGov;?>" name="participantesGov" id="efetivoAgencia" required>

                <label for="efetivoPriv">Efetivo de outras Agências Privadas:</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesPv;?>" name="participantesPv" id="efetivoPriv" required>

                <label for="efetivoNaoGov">Efetivo de Organizações Não-Governamentais:</label>
                <input id="input" type="number" placeholder="Quantidade:0" value="<?php print $rowEfetivo->participantesCv;?>" name="participantesCv" id="efetivoNaoGov" required>  
            </div>

            <!-- Seção 3: Tipos de Operação--> 
            
            <div id="tipos" class="tab-content">
                <label for="tipo_operacao">Tipo de Operação:</label>
                    <input id="input" id="tipo_operacao" name="tipoOp" value="<?php echo $funcao;?>" disabled >
                
                <label for="">Tipo de ação ou apoio:</label>
                <select id="input" id="" name="acaoOuApoio" class="" required>
                    <option value="<?php print $rowTipos->acaoOuApoio;?>"><?php print $rowTipos->acaoOuApoio;?></option>
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
                    <option value="<?php print @$rowTipos->transporte;?>"><?php print @$rowTipos->transporte;?></option>
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

                <div class="form-group">
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desTransporte" value="<?php print @$rowTipos->desTransporte;?>" id="" placeholder="Transporte"maxlength="100" id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

                <hr><br>
                <label for="">Manutenção:</label>
                <select id="input" id="" name="manutencao"  class="">
                <option value="<?php print @$manutencao;?>"><?php print @$manutencao;?></option>
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
                <div class="form-group">
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desManutencao" id="" value="<?php print @$desManutencao;?>" placeholder="Manuntenção" maxlength="100" id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

                <hr><br>
                <label for="">Suprimento:</label>
                <select id="input" id="" name="suprimento"  class="">
                <option value="<?php print @$rowTipos->suprimento;?>"><?php print @$rowTipos->suprimento;?></option>
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

                <div class="form-group">
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desSuprimento"  id="" value="<?php print @$desSuprimento;?>" placeholder="Não foi preenchido" maxlength="100" id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

                <hr><br>
                <label for="">Aviação:</label>
                <select id="input" id="" name="aviacao"  placeholder="Não foi preenchido"class="">
                <option value="<?php print @$rowTipos->aviacao;?>"><?php print @$rowTipos->aviacao;?></option>
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

                <div class="form-group">
                <label for="">Descreva ação ou apoio:</label>
                <input id="input" type="text" name="desAviacao"  id="" value="<?php print @$desAviacao;?>" placeholder="Aviação" maxlength="100" id="descricao" oninput="limitarCaracteres(this,100)">
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>
            
            </div>

            <!-- Seção 4: Recursos Provisionados -->
            <div id="recursos" class="tab-content">

            <label for="recebidos">Recebidos (R$):</label>
            <input id="input" type="number" id="recebidos" value="<?php print $rowRecursos->recebidos?>" name="recebidos" required placeholder="R$ 0,00">
            
            <label for="descentralizados">Descentralizados (R$):</label>
            <input id="input" type="number" id="descentralizados" value="<?php print $rowRecursos->descentralizados?>" name="descentralizados" required placeholder="R$ 0,00">
            
            <label for="liquidados">Liquidados (R$):</label>
            <input id="input" type="number" id="liquidados" value="<?php print $rowRecursos->liquidados?>" name="liquidados" required placeholder="R$ 0,00">
            
            <label for="devolvolvidos">Devolvolvidos (R$):</label>
            <input id="input" type="number" id="devolvolvidos" value="<?php print $rowRecursos->devolvidos?>" name="devolvidos" required placeholder="R$ 0,00">

            </div>

            <!-- Seção 5: Outras Informações -->

            <div id="outras" class="tab-content ">
            <div class="form-group">
                  <label for="op"> Síntese da Operação:</label>
                  <textarea name="sintase" id="input" required rows="2" maxlength="200" oninput="limitarCaracteres(this,200)"><?php print $sintaseOp?></textarea>
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>
                
                <hr>
                
                <div class="form-group">
                  <label for="informacoes"> Outras Informações:</label>
                  <textarea name="outrasInfos" id="input" rows="4" maxlength="200" oninput="limitarCaracteres(this,200)"><?php print $outrasinfos?></textarea>
                  <p class="contador" id="contador"></p>
                  <p class="aviso" id="aviso"></p>
                </div>

            </div>

            <!-- Seção 6: Anexos -->
            <div id="anexos" class="tab-content">

              <label for="relatorioFinal">Relatório Final (Apenas PDF, máx. 5MB):</label>
              <input class="input" type="file" name="relatorioFinal" id="relatorioFinal" accept=".pdf" 
                    onchange="validarArquivo('relatorioFinal', ['pdf'], 1, 5)">

              <label for="relatorioComando">Relatório do Comando Logístico (Apenas PDF, máx. 5MB):</label>
              <input class="input" type="file" name="relatorioComando" id="relatorioComando" accept=".pdf" 
                    onchange="validarArquivo('relatorioComando', ['pdf'], 1, 5)">

              <label for="fotos">Anexar fotos (JPG, PNG, GIF - máx. 3MB cada, até 5 arquivos):</label>
              <input class="input" type="file" name="fotos[]" id="fotos" accept="image/*" multiple 
                    onchange="validarArquivo('fotos', ['jpg', 'jpeg', 'png', 'gif'], 5, 3)">

              <label for="outrosDocs">Anexar Documento (Qualquer tipo, máx. 10MB):</label>
              <input class="input" type="file" name="outrasDocumentos" id="outrosDocs" 
                    onchange="validarArquivo('outrosDocs', [], 1, 10)">

            </div>
            
            <!-- Botão de Envio -->
            <input id="input" type="submit" name="submit" class="submit-btn"></input>

            </div>

            

        </form>
    </div>

    <script>
        function limitarCaracteres(campo, limite) {
            var formGroup = campo.parentElement; // Obtém o contêiner do campo
            var contador = formGroup.querySelector(".contador");
            var aviso = formGroup.querySelector(".aviso");

            if (campo.value.length > limite) {
                campo.value = campo.value.substring(0, limite);
            }

            var restante = limite - campo.value.length;
            contador.textContent = restante + " caracteres restantes";

            // Exibe ou oculta o aviso conforme necessário
            aviso.style.display = (restante === 0) ? "block" : "none";
        }
        //tabela funcao
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


        //color das barras
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
    </script>
</body>
</html>
