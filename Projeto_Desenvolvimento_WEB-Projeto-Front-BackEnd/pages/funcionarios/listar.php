<?php 

require_once("../../conexao.php");
$pagina = 'funcionarios';

$usuario = @$_POST['id_user'];

if (isset($usuario)) {
	$txtusuario = $usuario;
}else{
	$txtusuario = '';
}



	if($txtusuario == '') {
		$res = $pdo->query("SELECT * FROM funcionarios;");

	}elseif($txtusuario != '') {
		$res = $pdo->query("SELECT * FROM funcionarios WHERE usuario = '$txtusuario';");

	}	

	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$id 	  	  = $dados[$i]['id'];	
			$nome  	      = $dados[$i]['nome'];		
			$cpf  	      = $dados[$i]['cpf'];
			$cargo  	  = $dados[$i]['cargo'];
			$estado_civil = $dados[$i]['estado_civil'];
			$email  	  = $dados[$i]['email'];
			$telefone	  = $dados[$i]['telefone'];
			$sexo 	      = $dados[$i]['sexo'];
			$nascimento   = $dados[$i]['nascimento'];

	}	

echo '
	<table>
	<tr>
		<th>Nome</th>
		<th id="Dado_1" name ="nome">'.$nome.'</th>
	</tr>
	<tr>
		<th>CPF</th>
		<th id="Dado_2" name="cpf">'.$cpf.'</th>
	</tr>
	<tr>
		<th>Estado Civil</th>
		<th id="Dado_3" name="estado_civil">'.$estado_civil.'</th>
	</tr>
	<tr>
		<th>Email</th>
		<th id="Dado_4" name="email">'.$email.'</th>
	</tr>
	<tr>
		<th>Telefone</th>
		<th id="Dado_5" name="telefone">'.$telefone.'</th>
	</tr>
	<tr>
		<th>Sexo</th>
		<th id="Dado_6" name="sexo">'.$sexo.'</th>
	</tr>
	<tr>
		<th>Nascimento</th>
		<th id="Dado_7" name="nascimento">'.$nascimento.'</th>
	</tr>
	</table>


';




?>



