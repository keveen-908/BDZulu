<?php
    include "config.php";

    $conn = new PDO ("mysql:dbname=bdcolog;host=localhost", "root", "@160l0nc3t");
 
    //SE ADMINISTRADOR EXISTIR
    if (isset($_POST['administrador'])) {
        //UID RECEBE O POST UID
        $uid = $_POST["uid"];
        //ADM RECEBE "ADMINISTRADOR"
        $adm = "Admin";
        //ATUALIZA NA TABELA USUARIO O ADM QUE FOR INFORMADO O ID
        $sql = "UPDATE usuarios SET adm=:ADM  WHERE uid = :ID";
        
        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['gerente'])) {

        $uid = $_POST["uid"];
        $adm = "Gerente";

        $sql = "UPDATE usuarios SET adm=:ADM  WHERE uid = :ID";

        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['on'])) {

        $uid = $_POST["uid"];
        $adm = "Usuario";

        $sql = "UPDATE usuarios SET adm=:ADM  WHERE uid = :ID";

        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['Preparo'])) {

        $uid = $_POST["uid"];
        $adm = "Preparo";

        $sql = "UPDATE usuarios SET funcao=:ADM  WHERE uid = :ID";

        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['Emprego'])) {

        $uid = $_POST["uid"];
        $adm = "Emprego";

        $sql = "UPDATE usuarios SET funcao=:ADM  WHERE uid = :ID";

        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['Transporte'])) {

        $uid = $_POST["uid"];
        $adm = "Transporte";

        $sql = "UPDATE usuarios SET funcao=:ADM  WHERE uid = :ID";

        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['Remover'])) {

        $uid = $_POST["uid"];
        $adm = "";

        $sql = "UPDATE usuarios SET funcao=:ADM  WHERE uid = :ID";

        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":ADM", $adm);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['ativar'])) {
        //UID RECEBE O POST UID
        $uid = $_POST["uid"];
        //ADM RECEBE "ADMINISTRADOR"
        $status = "Ativo";
        //ATUALIZA NA TABELA usuarios O ADM QUE FOR INFORMADO O ID
        $sql = "UPDATE usuarios SET status =:STATUS  WHERE uid = :ID";
        
        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":STATUS", $status);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    if (isset($_POST['desativar'])) {
        //UID RECEBE O POST UID
        $uid = $_POST["uid"];
        //ADM RECEBE "ADMINISTRADOR"
        $status = "Desativado";
        //ATUALIZA NA TABELA usuarios O ADM QUE FOR INFORMADO O ID
        $sql = "UPDATE usuarios SET status =:STATUS  WHERE uid = :ID";
        
        $stmt = $conn->prepare ($sql);

        $stmt -> bindParam(":STATUS", $status);

        $stmt -> bindParam(":ID", $uid);

        $stmt->execute();

        header ("location: /index.php?p=admin");

    }
    else {
        header ("location: /index.php?p=admin");
    }

?>