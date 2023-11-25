<?php 

require_once("../conexao_login.php");

$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

$id = $_POST['id'];


//VERIFICAR SE O REGISTRO JÁ ESTÁ CADASTRADO
$res_c = $pdo->query("select * from login where usuario = '$usuario'");
$dados_c = $res_c->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados_c);
if($linhas == 0){
	$res = $pdo->prepare("INSERT INTO login 
						(usuario,senha) 
						VALUES 
						(:usuario,:senha) ");

	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha);

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
			alert("Usuário já cadastrado!!")
		</script>
	<?php	

}




