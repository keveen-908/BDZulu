<?php

    include_once('config.php');
    switch ($_REQUEST['acao']) {
        case 'editar':
            $nomeOp = $_POST['operacao'];
            $missao = $_POST['missao'];
            $estado = $_POST['estado'];
            $cma = $_POST['cma'];
            $rm = $_POST['rm'];
            $comandoOp = $_POST['comandoOp'];
            $comandoApoio = $_POST['comandoApoiado'];
            $inicioOp = $_POST['inicioOp'];
            $fimOp = $_POST['fimOp'];

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

            $res = $mysqli->query($sql) or die($mysqli->error);

            if ($res === TRUE) {
                print "<script>alert('Operação atualizada com sucesso!');</script>";
                print "<script>location.href = '../resumoPesq.php';</script>";
            } else {
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href = 'resumoPesq.php';</script>";
            }
            
            break;
        case 'atualizar':
            //conferir todos os cases e verificar se estão corretos
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['id' => $id, 'nome' => $nome, 'email' => $email]);
            echo json_encode(['mensagem' => 'Usuário atualizado com sucesso.']);
            break;
        case 'excluir':
            $id = $_POST['id'];
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            echo json_encode(['mensagem' => 'Usuário excluído com sucesso.']);
            break;
    }

?>