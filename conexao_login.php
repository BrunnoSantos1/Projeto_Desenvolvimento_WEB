<?php 

require_once("config_login.php");
@session_start();

try {	
	$pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");	

	echo 'Conectado';

} catch (Exception $e) {
	echo 'Erro ao conectar com o banco!!' .$e;
}

 ?>

