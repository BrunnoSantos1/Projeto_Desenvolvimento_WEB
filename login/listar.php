<?php 

require_once("../conexao.php");
$pagina = 'login';



echo '
<div class="table-responsive">
<table class="table table-bordered" style="width: 100%; margin-bottom: 1rem; color: #212529; text-align: center; margin-top: 0px; background-color: aliceblue;">
<!-- <table class="table mt-3" tabelas> -->
 	<thead class="thead-light table-striped">
		<tr>
			<th scope="col">Usuario</th>
			<th scope="col">Senha</th>
		</tr>
	</thead> 
	<tbody>';

		$res = $pdo->query("SELECT * FROM login;");

	
	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$id 	 = $dados[$i]['id'];	
			$usuario = $dados[$i]['usuario'];
			$senha 	 = $dados[$i]['senha'];
	

echo '
		<tr>
			<td>'.$usuario.'</td>
			<td>'.$senha.'</td>			
			
		</tr>';

	}

echo  '
	</tbody>
</table> 
</div>';



?>

