<?php 

require_once("../conexao_login.php");
$pagina = 'ponto';


$usuario = @$_POST['usuario'];



echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="table-responsive">
<table class="table table-bordered" style="width: 100%; margin-bottom: 1rem; color: #212529; text-align: center; margin-top: 0px; background-color: aliceblue;">
<!-- <table class="table mt-3" tabelas> -->
 	<thead class="thead-light table-striped">
		<tr>
			<th scope="col">Usuario</th>
			<th scope="col">Nome</th>
			<th scope="col">Cargo</th>		
			<th scope="col">Data Registro</th>
			<th scope="col">Hora Registro</th>
		</tr>
	</thead> 
	<tbody>';

	$res = $pdo->query("SELECT * FROM ponto;");

	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$id 	 = $dados[$i]['id'];	
			$usuario = $dados[$i]['usuario'];
			$nome  	 = $dados[$i]['nome'];
			$cargo   = $dados[$i]['cargo'];
			$data 	 = $dados[$i]['data'];
			$hora 	 = $dados[$i]['hora'];
		

echo '
		<tr>
			<td>'.$id.'</td>
			<td>'.$usuario.'</td>			
			<td>'.$nome.'</td>	
			<td>'.$cargo.'</td>
			<td>'.$data.'</td>			
			<td>'.$hora.'</td>				
		</tr>';

	}

echo  '
	</tbody>
</table> 
</div>';



?>

