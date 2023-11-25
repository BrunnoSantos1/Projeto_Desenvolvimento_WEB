<?php 

require_once("../conexao_login.php");

$usuario  = $_POST['usuario'];
$nome  = $_POST['nome'];
$cargo = $_POST['cargo'];

$dataAtual = date('d-m-Y');
$horaAtual = date('H:i');

$id = $_POST['id'];

	$res = $pdo->prepare("INSERT INTO ponto 
						(usuario,nome,cargo,data,hora) 
						VALUES 
						(:usuario,:nome,:cargo,:data,:hora) ");

	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":nome", $nome);
	$res->bindValue(":cargo", $cargo);
	$res->bindValue(":data", $dataAtual);
	$res->bindValue(":hora", $horaAtual);

	$res->execute();

	?>	

<script>
	alert("Ponto batido com Sucesso!!")
</script>
