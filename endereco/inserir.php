<?php 

require_once("../conexao_login.php");

$endereco      = $_POST['endereco'];
$bairro        = $_POST['bairro'];
$cidade        = $_POST['cidade'];
$cep           = $_POST['cep'];
$nacionalidade = $_POST['nacionalidade'];

$id = $_POST['id_endereco'];

	$res = $pdo->prepare("INSERT INTO endereco 
						(id,endereco,bairro,cidade,cep,nacionalidade,cpf) 
						VALUES 
						(:id,:endereco,:bairro,:cidade,:cep,::nacionalidade,:cpf) ");

	$res->bindValue(":endereco", $endereco);
	$res->bindValue(":bairro", $bairro);
	$res->bindValue(":cidade", $cidade);
	$res->bindValue(":cep", $cep);
	$res->bindValue(":nacionalidade", $nacionalidade);	

	$res->bindValue(":id", $id);

	$res->execute();

	?>		
		<script>
			alert("Cadastrado com Sucesso!!")
		</script>

	<?php 


?>