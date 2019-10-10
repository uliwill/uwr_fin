<?php
// CONECTAR COM MYSQL
include_once('conn.php');

//RECEBER OS DADOS
$usu_nome = $_POST['usu_nome'];
$usu_email = $_POST['usu_email'];
$usu_senha = md5($_POST['usu_senha']);

//QUERY
$sql = "INSERT INTO usuarios (usu_nome, usu_email, usu_senha) VALUES (:usu_nome, :usu_email, :usu_senha)";

// AÇÃO PDO
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':usu_nome', $usu_nome, PDO::PARAM_STR);
$stmt->bindParam(':usu_email', $usu_email, PDO::PARAM_STR);
$stmt->bindParam(':usu_senha', $usu_senha, PDO::PARAM_STR);
$stmt->execute();
?>