<?php 

    // Aumenta o tempo de vida da sessão no servidor (em segundos)
    ini_set('session.gc_maxlifetime', 3600); // 1 hora

    // Configura o tempo de vida do cookie da sessão no navegador
    session_set_cookie_params([
        'lifetime' => 3600, // 1 hora
        'path' => '/',
        'secure' => false, // use true se o site estiver em HTTPS
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    // Inicia a sessão
    session_start();
    
    date_default_timezone_set('America/Sao_Paulo');
    
    $erro = false;

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "bdcolog";

    $mysqli = mysqli_connect($host,$user, $pass,$db);
    $mysqli->set_charset("utf8mb4");
    if( $mysqli->connect_errno){
        die("Falha na conexão");
    }

    if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
        header("Location:login.php");
    }else{
        $email = $_SESSION['email'];
        $pesquisa = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = $mysqli->query($pesquisa);
        $linha = $resultado->fetch_array();
    
        $nomeUsuario = $linha['nome'];
        $pg = $linha['pg'];
        $funcao = $linha['funcao'];
    }

    // verificacao de cargo de adm

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and adm = 'Admin' or adm = 'Gerente'";

    $result = $mysqli -> query($sql);
    

    if (mysqli_num_rows($result) > 1) {
        $erro = $linha['adm'];
    }

 
?>
