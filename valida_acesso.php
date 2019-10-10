<?php
    session_start();

    // CONECTAR COM MYSQL
    include_once('conn.php');

    //RECEBER OS DADOS
    $log_email = $_POST['log_email'];
    $log_senha = md5($_POST['log_senha']);

    // QUERY
    $sql = "SELECT * FROM usuarios WHERE usu_email = :log_email AND usu_senha = :log_senha";

    // AÇÃO PDO
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':log_email', $log_email, PDO::PARAM_STR);
    $stmt->bindParam(':log_senha', $log_senha, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $num_registro = $stmt->rowCount();
    
    if($num_registro != 0) {
        $_SESSION['usu_id'] = $result->usu_id;
        $_SESSION['usu_nome'] = $result->usu_nome;
        $_SESSION['usu_email'] = $result->usu_email;

        header('Location: home.php');
    } else {
        header('Location: index.php?erro=1');
    }

?>