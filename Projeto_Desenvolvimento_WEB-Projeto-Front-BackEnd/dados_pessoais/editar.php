<?php 
//DADOS PESSOAIS
require_once("../conexao_login.php");

$estado_civil = $_POST['estado_civil'];
$email        = $_POST['email'];
$telefone     = $_POST['telefone'];
$sexo         = $_POST['sexo'];
$nascimento   = $_POST['nascimento'];

$id = $_POST['id_dados_pessoais'];

$res = $pdo->prepare("UPDATE dados_pessoais SET 
                        estado_civil = :estado_civil
                        email        = :email 
                        telefone     = :telefone 
                        sexo         = :sexo 
                        nascimento   = :nascimento 
                        WHERE id = :id ");

$res->bindValue(":estado_civil", $estado_civil);
$res->bindValue(":email", $email);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":sexo", $sexo);
$res->bindValue(":nascimento", $nascimento);

$res->bindValue(":id", $id);

$res->execute();


echo "Editado com Sucesso!!";


?>