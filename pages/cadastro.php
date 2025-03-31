<?php 



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Cadastro</title>
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
        <h2 style="text-align:center;">Cadastro de Usuários</h2>

        <form action="./acoes/cadastrar.php" method="POST">

            <!-- Menu de Abas -->
        

            <!-- Seção 1: Dados da Operação -->
            <div id="dados" class="tab-content active">
                
            <label for="estado">Posto / Graduação:</label>
                <select id="estado" name="pg" class="">
                <option value="">Selecione seu posto/gradução</option>
                      <option value="GEN">GENERAL DE EXÉRCITO</option> 
                      <option value="GEN">GENERAL DE DIVISÃO</option> 
                      <option value="GEN">GENERAL DE BRIGADA</option> 
                      <option value="CEL">CORONEL</option>  
                      <option value="TC">TENENTE-CORONEL</option>
                      <option value="MAJ">MAJOR</option>
                      <option value="CAP">CAPITÃO</option>
                      <option value="1°TEN">1°TENENTE</option>
                      <option value="2°TEN">2°TENENTE</option>
                      <option value="ASP">ASPIRANTE</option>
                      <option value="ST">SUB TENENTE</option>
                      <option value="1°SGT">1°SARGENTO</option>
                      <option value="2°SGT">2°SARGENTO</option>
                      <option value="3°SGT">3°SARGENTO</option>
                      <option value="CB">CABO</option>
                      <option value="SD">SOLDADO</option>
                </select>

            

                <label for="name">Nome:</label>
                <input type="text" name="nome" id="name" required>
                

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" autocomplete="off" required>

                <label for="comandoOp">Senha:</label>
                <div class="input-group">
                    <input type="password" id="senha" id="comandoOp" name="senha" class="form-control" placeholder="*********">
                    <span class="md-line"></span>
                    <button type="button" id="toggleSenha" class="btn btn-link">
                        <i class="icofont icofont-eye-alt"></i> <!-- Ícone de olho -->
                    </button>
                </div>
                                                    

        
                <label for="funcao">Função:</label>
                <select id="funcao" name="funcao" class="">
                    <option value="">Selecione o Função </option>
                    <option value="Transporte">Transporte</option>
                    <option value="Emprego">Emprego</option>
                    <option value="Preparo">Preparo</option>
                </select>

                <label for="tipoUsuario">Tipo de usuário:</label>
                <select id="tipoUsuario" name="tipoUsuario" class="">
                    <option value="">Selecione o Tipo de Usuário </option>
                    <option value="">Usuário</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Admin">Administrador</option>
                </select>       
            </div>

            <!-- Botão de Envio -->
            <input type="submit" name="submit" class="submit-btn" value="Enviar Cadastro">


        </form>
    </div>

    <script type="text/javascript">
        document.getElementById('toggleSenha').addEventListener('click', function() {
            var senhaField = document.getElementById('senha');
            var icon = this.querySelector('i');
            
            // Verifica o tipo do campo de senha
            if (senhaField.type === 'password') {
                senhaField.type = 'text'; // Exibe a senha
                icon.classList.remove('icofont-eye-alt'); // Troca o ícone
                icon.classList.add('icofont-eye'); // Ícone de "olho aberto"
            } else {
                senhaField.type = 'password'; // Esconde a senha
                icon.classList.remove('icofont-eye'); // Troca o ícone
                icon.classList.add('icofont-eye-alt'); // Ícone de "olho fechado"
            }
        });
    </script>

 
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
    </script>

</body>
</html>
