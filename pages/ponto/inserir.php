<?php 

require_once("../../conexao.php");

$usuario = @$_POST['id_user'];

// $usuario  = $_POST['usuario'];
$nome  = $_POST['nome'];
$cargo = $_POST['cargo'];


$dataAtual = date('Y-m-d');
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

<!-- <script>
	alert("Ponto batido com Sucesso!!")
</script> -->
