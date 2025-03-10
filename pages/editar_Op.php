<?php
    include_once('../acoes/config.php');
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM operacao WHERE opid = " . $id;
    $res = $mysqli->query($sql);
    $row = $res->fetch_object();

    

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
        <h2 style="text-align:center;">Editar Operação</h2>

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
                <label for="operacao">Nome da Operação:</label>
                <input id="input" type="text" value="<?php print $row->operacao;?>"name="operacao" id="operacao" placeholder="Operação" required>

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

                <label for="missao">Missão:</label>
                <input id="input" type="text" name="missao" value="<?php print $row->missao;?>" placeholder="Missão" id="missao" required>

                
        
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

                <label for="comandoOp">Comando da Operação:</label>
                <input id="input" type="text" name="comandoOp" value="<?php print $row->comandoOp;?>" placeholder="Comando da Operação" id="comandoOp" required>
                
                <label for="OrgApoiada">Organização Apoiada:</label>
                <input id="input" type="text" name="comandoApoiado" value="<?php print $row->comandoApoio;?>" placeholder="Organização Apoiada" id="OrgApoiada" required>
                
                <label for="inicioOp">Ínicio da operação:</label>
                <input id="input" type="date" name="inicioOp" value="<?php print $row->inicioOp;?>" id="inicioOp" required>
                
                <label for="terminoOp">Término da operação:</label>
                <input id="input" type="date" name="fimOp" id="terminoOp" value="<?php print $row->fimOp;?>" required>
            </div>

            <!-- Resolver situacao do"tipo op" -->
            <!--IR COLOCANDO AS PERGUNTAS POR SESSAO E CORRIGINDO ERROS E PESQUISA SQL -->
           

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
    </script>
</body>
</html>
