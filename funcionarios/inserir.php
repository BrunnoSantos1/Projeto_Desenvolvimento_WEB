<?php 

require_once("../conexao_login.php");

$nome  = $_POST['nome'];
$cpf   = $_POST['cpf'];
$cargo = $_POST['cargo'];



$id = $_POST['id'];

	$res = $pdo->prepare("INSERT INTO funcionarios 
						(nome,cpf,cargo,id_dados_pessoais,id_endereco) 
						VALUES 
						(:nome,:cpf,:cargo,(SELECT MAX (id_dados_pessoais + 1) FROM funcionarios),(SELECT MAX (id_endereco + 1) FROM funcionarios)) ");

	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":cargo", $cargo);

	$res->execute();

	?>	

<script>
	alert("Funcionario Cadastrado com Sucesso!!")
</script>
