<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "bdcolog";

$mysqli = mysqli_connect($host,$user, $pass,$db);

$novaSenha = rand(10000000, 99999999);

$hash = password_hash($novaSenha, PASSWORD_DEFAULT);

$sql = "UPDATE usuarios SET senha= '$hash' WHERE email= '$email'";
$result = $mysqli -> query($sql);   

?>

