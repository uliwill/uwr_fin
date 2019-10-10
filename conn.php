<?php

$dsn = 'mysql:host=localhost;dbname=db_uwr_finance_personal';
$user = 'root';
$pass = '';

try{
	$pdo = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	return $pdo;
} catch (PDOException $e) {
	echo '<p>'.$e->getMessage().'</p>';
}

?>