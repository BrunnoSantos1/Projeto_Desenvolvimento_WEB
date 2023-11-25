<?php 

require_once("../conexao.php");
$pagina = 'endereco';

$id = @$_POST['id_endereco'];

if (isset($id)) {
	$txtid = $id;
}else{
	$txtid = '';
}


	if($txtid != '') {
		$res = $pdo->query("SELECT * FROM endereco WHERE id = '$txtid';");

	}

	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$id 	  	    = $dados[$i]['id'];	
			$endereco  	    = $dados[$i]['endereco'];
			$bairro 	    = $dados[$i]['bairro'];
			$cidade  	    = $dados[$i]['cidade'];
			$cep	  		= $dados[$i]['cep'];
			$nacionalidade 	= $dados[$i]['nacionalidade'];
		
	}


?>

