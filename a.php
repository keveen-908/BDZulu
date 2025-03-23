<?php
    $host = "localhost";
    $user = "root";
    $pass = "@160l0nc3t";
    $db = "bdcolog";

    $conn = mysqli_connect($host,$user, $pass,$db);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consultar o valor que foi selecionado anteriormente do banco (exemplo)
$sql = "SELECT pg FROM usuarios WHERE uid = 1"; // Exemplo de consulta
$result = $conn->query($sql);

$selectedValue = null;

if ($result->num_rows > 0) {
    // Obter o valor selecionado (substitua pelo seu campo da tabela)
    $row = $result->fetch_assoc();
    $selectedValue = $row['pg'];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção com valor do banco</title>
</head>
<body>

    <h2>Escolha uma opção</h2>

    <!-- Select preenchido com valores do banco de dados -->
    <form action="processar.php" method="post">
        <label for="opcao">Escolha uma opção:</label>
        <select name="opcao" id="opcao">
            <?php
            // Exemplo de valores para o select (gerados dinamicamente)
            $opcoes = ["CB", "SD", "2°SGT", "opcao4"];

            // Preencher as opções
            foreach ($opcoes as $opcao) {
                // Verificar se a opção atual é a que veio do banco de dados
                $selected = ($opcao == $selectedValue) ? 'selected' : '';
                echo "<option value='$opcao' $selected>$opcao</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>
