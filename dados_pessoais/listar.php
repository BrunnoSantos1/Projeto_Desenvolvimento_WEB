<?php 

require_once("../conexao.php");
$pagina = 'dados_pessoais';

$ano = date('Y');
$nome = @$_POST['nome'];

if (isset($nome)) {
	$txtnome = $nome;
}else{
	$txtnome = '';
}


	if($txtnome == '') {
		$res = $pdo->query("SELECT * FROM dados_pessoais;");

	}elseif($txtnome != '') {
		$res = $pdo->query("SELECT * FROM dados_pessoais WHERE nome = '$txtnome';");

	}
	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);

	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}
			$id 	  	  = $dados[$i]['id'];	
			$cpf  	      = $dados[$i]['cpf'];
			$estado_civil = $dados[$i]['estado_civil'];
			$email  	  = $dados[$i]['email'];
			$telefone	  = $dados[$i]['telefone'];
			$sexo 	      = $dados[$i]['sexo'];
			$nascimento   = $dados[$i]['nascimento'];

	}


?>

