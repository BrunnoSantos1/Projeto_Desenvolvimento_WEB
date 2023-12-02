<?php 

require_once("../../conexao.php");

$nome  = $_POST['nome'];
$cpf   = $_POST['cpf'];
$cargo = $_POST['cargo'];
$estado_civil  = $_POST['estado_civil'];
$email   = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];



$usuario = 'usuario';

	$res = $pdo->prepare("INSERT INTO funcionarios 
						(nome,cpf,cargo,estado_civil,email,telefone,sexo,nascimento,usuario)
							VALUES 
						(:nome,:cpf,:cargo,:estado_civil,:email,:telefone,:sexo,:nascimento,:usuario) ");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":cargo", $cargo);
	$res->bindValue(":estado_civil", $estado_civil);
	$res->bindValue(":email", $email);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":sexo", $sexo);
	$res->bindValue(":nascimento", $nascimento);
	$res->bindValue(":usuario", $usuario);

	$res->execute();


	
	$res = $pdo->prepare("INSERT INTO funcionarios 
						(nome,cpf,cargo,estado_civil,email,telefone,sexo,nascimento,usuario)
							VALUES 
						(:nome,:cpf,:cargo,:estado_civil,:email,:telefone,:sexo,:nascimento,:usuario) ");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":cargo", $cargo);
	$res->bindValue(":estado_civil", $estado_civil);
	$res->bindValue(":email", $email);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":sexo", $sexo);
	$res->bindValue(":nascimento", $nascimento);
	$res->bindValue(":usuario", $usuario);

	$res->execute();

	
	
	
	?>	


