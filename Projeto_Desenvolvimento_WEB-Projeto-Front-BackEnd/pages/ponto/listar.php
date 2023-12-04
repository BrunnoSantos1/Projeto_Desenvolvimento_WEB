<?php 


require_once("../../conexao.php");
$pagina = 'ponto';



$usuario = $_SESSION['login_usuario'];

if (isset($usuario)) {
	$txtusuario = $usuario;
}else{
	$txtusuario = '';
}

echo "<script language='javascript'>window.alert('.$usuario.'); </script>";



echo '
<table class="historico">
 	<thead class="">
		<tr>
			<th scope="col">Usuario</th>
			<th scope="col">Nome</th>
			<th scope="col">Cargo</th>		
			<th scope="col">Data Registro</th>
			<th scope="col">Hora Registro</th>
		</tr>
	</thead> 
	<tbody>';


		$res2 = $pdo->query("SELECT * FROM funcionarios WHERE usuario = '$txtusuario';");
	
		$dados2 = $res2->fetchAll(PDO::FETCH_ASSOC);
	
		for ($i=0; $i < count($dados2); $i++) { 
				foreach ($dados2[$i] as $key => $value) {
				}
				$nome  = $dados2[$i]['nome'];	
				$cargo = $dados2[$i]['cargo'];

			
			

	$res = $pdo->query("SELECT * FROM ponto WHERE usuario = '$txtusuario';");
	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$usuario = $dados[$i]['usuario'];
			$data 	 = $dados[$i]['data'];
			$hora 	 = $dados[$i]['hora'];

			
	

echo '
		<tr>
			<td>'.$nome.'</td>	
			<td>'.$cargo.'</td>
			<td>'.$usuario.'</td>		
			<td>'.$data.'</td>			
			<td>'.$hora.'</td>				
		</tr>';
	}
	}


echo  '
	</tbody>
</table> 
</div>';



?>

