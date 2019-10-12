<?php
    session_start();

    unset($_SESSION['usu_id']);
    unset($_SESSION['usu_nome']);
    unset($_SESSION['usu_email']);
    
    header('Location: index.php');
?>