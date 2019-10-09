<?php

$dsn = 'mysql:host=localhost;dbname=db_uwr_finance_personal';
$user = 'root';
$pass = '';

try{
	$pdo = new PDO($dsn,$user,$pass);
} catch (PDOException $e) {
	echo '<p>'.$e->getMessage().'</p>';
}
?>