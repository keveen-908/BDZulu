<?php

session_start();

$email = $_POST['email'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/vendor/autoload.php';
require 'acoes/gerarSenha.php';

$mail = new PHPMailer(true);

try {
    //Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Destinatários
    $mail->setFrom($email);
    $mail->addAddress($email);

    //Conteúdo
    $mail->isHTML(true);
    $mail->Subject = 'Assunto do email';
    $mail->Body    = "$novaSenha";

    $mail->send();
    $_SESSION['erro'] = 'Sua nova senha foi enviada para o seu email';
    header('location: index.php');
} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
}

?>
