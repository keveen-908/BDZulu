<?php
$submit = @$_POST['submit'];
if(isset($submit)){
    
$postoGd = @$_POST['postoGd'];
$nomeUsuario = @$_POST['nome'];
$emailUsuario = @$_POST['email'];
$senha1 = @$_POST['senha1'];
$senha2 = @$_POST['senha2'];


if($senha1 == $senha2){
    $hash = password_hash($senha1, PASSWORD_DEFAULT);

    $sql = "UPDATE usuarios SET senha= '$hash', nome = '$nomeUsuario', email = '$emailUsuario', pg = '$postoGd' WHERE email= '$email'";
    $result = $mysqli -> query($sql);   
}

}
// Consultar o valor que foi selecionado anteriormente do banco (exemplo)
$sql = "SELECT pg FROM usuarios WHERE uid = 1"; // Exemplo de consulta
$result = $mysqli->query($sql);

$selectedValue = null;

if ($result->num_rows > 0) {
    // Obter o valor selecionado (substitua pelo seu campo da tabela)
    $row = $result->fetch_assoc();
    $selectedValue = $row['pg'];

}

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
    
    <!-- Formulário para capturar as senhas -->
    <form id="formSenha" method="POST">

            <!-- Seção 1: Dados da Operação -->
            <div id="dados" class="tab-content active">

                <label for="name">Nome:</label>
                <input type="text" name="nome" value="<?php echo $nomeUsuario; ?>" id="name" required>
                

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>"  required>                   

                <label for="senha">Digite sua nova senha:</label>
                <input type="password" name="senha1" id="senha1" required>

                <label for="senha1">Confirme sua nova senha:</label>
                <input type="password" name="senha2" id="senha2" required>
                 <p id="resultado"></p>
        
            </div>

            <!-- Botão de Envio -->
            <input type="submit" name="submit" class="submit-btn" value="Enviar Cadastro">


        </form>
    </div>


    <script>
        // Função para verificar se as senhas são iguais
        function verificarSenhas(senha1, senha2) {
            const resultado = document.getElementById('resultado');
            const botaoSubmit = document.getElementById('botaoSubmit');
            if (senha1 === senha2) {
                resultado.textContent = "As senhas são iguais.";
                resultado.style.color = "green";
                botaoSubmit.disabled = false;
            } else {
                resultado.textContent = "As senhas são diferentes.";
                resultado.style.color = "red";
                botaoSubmit.disabled = true;
                // Exibe o alerta se as senhas forem diferentes
            }
        }

        // Função que será chamada sempre que houver uma mudança em um dos campos de senha
        function checarSenhasEmTempoReal() {
            const senha1 = document.getElementById('senha1').value;
            const senha2 = document.getElementById('senha2').value;

            // Chama a função para verificar as senhas
            verificarSenhas(senha1, senha2);
        }

        // Adiciona o evento de input para os campos de senha
        document.getElementById('senha2').addEventListener('input', checarSenhasEmTempoReal);
    </script>
</body>
</html>