<?php 

require_once("conexao.php");
@session_cache_expire(120);
@session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
// $senha_cript = md5($_POST['senha']);

if(empty($usuario) || empty($senha)){
	echo "<script language='javascript'>window.location='index.php'; </script>";
}else{
	$res = $pdo->prepare("SELECT * FROM login where usuario = :usuario and senha = :senha");
	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha);
	$res->execute();

	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);

	if($linhas > 0){
		
		$_SESSION['login_usuario']  = $dados[0]['usuario'];
		$_SESSION['acesso_usuario'] = $dados[0]['cargo'];


		if($_SESSION['acesso_usuario'] == 'Funcionario'){
			echo "<script language='javascript'>window.alert('Seja Bem Vindo, Funcionario ".$_SESSION['login_usuario']."'); </script>";
			echo "<script language='javascript'>window.location='pages/funcionarios.php'; </script>";

		}

		elseif($_SESSION['acesso_usuario'] == 'Gestor'){
			echo "<script language='javascript'>window.alert('Seja Bem Vindo, Gestor ".$_SESSION['login_usuario']."'); </script>";	
			echo "<script language='javascript'>window.location='pages/gestor.php'; </script>";

		}else{
			echo "<script language='javascript'>window.alert('Cargo não cadastrado, portanto Acesso Negado'); </script>";
			echo "<script language='javascript'>window.location='index.php'; </script>";		
		}


	}else{
		echo "<script language='javascript'>window.alert('Usuário ou Senha Incorretos!!'); </script>";
		echo "<script language='javascript'>window.location='index.php'; </script>";
	}
	

}

 ?>