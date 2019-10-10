<?php
    session_start();
    if(!isset($_SESSION['usu_email'])) {
        header('Location: index.php?erro=1');
	}
    include_once("conn.php");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <?php
        include_once("head.html");
    ?>
<body>
    <?php
        include_once("header.php");
        include_once("main.php");
        include_once("footer.php");
    ?>
</body>
</html>