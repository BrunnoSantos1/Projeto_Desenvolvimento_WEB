<?php 

require_once("../conexao.php");
$pagina = 'funcionarios';

$nome = @$_POST['nome'];

if (isset($nome)) {
	$txtnome = $nome;
}else{
	$txtnome = '';
}


echo '
<div class="table-responsive">
<table class="table table-bordered" style="width: 100%; margin-bottom: 1rem; color: #212529; text-align: center; margin-top: 0px; background-color: aliceblue;">
<!-- <table class="table mt-3" tabelas> -->
 	<thead class="thead-light table-striped">
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">CPF</th>
			<th scope="col">Cargo</th>				
		</tr>
	</thead> 
	<tbody>';

	if($txtnome == '') {
		$res = $pdo->query("SELECT * FROM funcionarios;");

	}elseif($txtnome != '') {
		$res = $pdo->query("SELECT * FROM funcionarios WHERE nome = '$txtnome';");

	}	

	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($dados);
	
	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$id 	  	       = $dados[$i]['id'];	
			$nome  	           = $dados[$i]['nome'];
			$cpf 	           = $dados[$i]['cpf'];
			$cargo  	       = $dados[$i]['cargo'];
			$id_dados_pessoais = $dados[$i]['id_dados_pessoais'];
			$id_endereco 	   = $dados[$i]['id_endereco'];
			
			
echo '
		<tr>
			<td>'.$nome.'</td>
			<td>'.$cpf.'</td>			
			<td>'.$cargo.'</td>	
			
		</tr>';

		
	}

echo  '
	</tbody>
</table> 
</div>';



?>

