<?php

/* class Conexao {

	private $host = 'localhost';
	private $dbname = 'db_uwr_finance_personal';
	private $user = 'root';
	private $pass = '';

	public function conectar() {
		try {
			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);
            return $conexao;
            echo "lixo";
		} catch (PDOException $e) {
            echo '<p>'.$e->getMessage().'</p>';
		}
	}
} */

$dsn = 'mysql:host=localhost;dbname=db_uwr_finance_personal';
$user = 'root';
$pass = '';

try{
	$pdo = new PDO($dsn,$user,$pass);
} catch (PDOException $e) {
	echo '<p>'.$e->getMessage().'</p>';
}
?>