<?php 

require_once("../conexao_login.php");

$estado_civil = $_POST['estado_civil'];
$email        = $_POST['email'];
$telefone     = $_POST['telefone'];
$sexo         = $_POST['sexo'];
$nascimento   = $_POST['nascimento'];
$cpf  		  = $_POST['cpf'];

$id = $_POST['id_dados_pessoais'];


//VERIFICAR SE O REGISTRO JÁ ESTÁ CADASTRADO
$res_c = $pdo->query("select * from dados_pessoais where cpf = '$cpf'");
$dados_c = $res_c->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados_c);
if($linhas == 0){
	$res = $pdo->prepare("INSERT INTO dados_pessoais 
						(id,estado_civil,email,telefone,sexo,nascimento,cpf) 
						VALUES 
						(:id,:estado_civil,:email,:telefone,:sexo,::nascimento,:cpf) ");

	$res->bindValue(":estado_civil", $estado_civil);
	$res->bindValue(":email", $email);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":sexo", $sexo);
	$res->bindValue(":nascimento", $nascimento);	
	$res->bindValue(":cpf", $cpf);

	$res->bindValue(":id", $id);


	$res->execute();

	?>		
		<script>
			alert("Cadastrado com Sucesso!!")
		</script>

	<?php 

}

else{

	?>
		<script>
			alert("Registro já existente!!")
		</script>
	<?php	

}