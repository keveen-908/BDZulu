<?php
include 'config.php';

if (isset($_POST['buscar'])) {
    $termo = $_POST['buscar'];
    $sql = "SELECT * FROM usuarios WHERE uid,pg,nome,adm,funcao LIKE '$termo'";
    $stmt = $conn->prepare($sql);
    $stmt->execute(["%$termo%"]);
    $resultados = $stmt->fetchAll();

    if (!empty($resultados)) {
        foreach ($resultados as $row) {
            echo "<li>{$row['coluna']} - <a href='index.php?pagina=editar&id={$row['id']}'>Editar</a></li>";
        }
    } else {
        echo "<li>Nenhum resultado encontrado.</li>";
    }
}
?>