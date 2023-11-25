<?php 
//DADOS DE ENDERECO
require_once("../conexao_login.php");

$endereco      = $_POST['endereco'];
$bairro        = $_POST['bairro'];
$cidade        = $_POST['cidade'];
$cep           = $_POST['cep'];
$nacionalidade = $_POST['nacionalidade'];

$id = $_POST['id_endereco'];

$res = $pdo->prepare("UPDATE endereco SET 
                        endereco      = :endereco
                        bairro        = :bairro 
                        cidade        = :cidade 
                        cep           = :cep 
                        nacionalidade = :nacionalidade 
                        WHERE id = :id ");

$res->bindValue(":endereco", $endereco);
$res->bindValue(":bairro", $bairro);
$res->bindValue(":cidade", $cidade);
$res->bindValue(":cep", $cep);
$res->bindValue(":nacionalidade", $nacionalidade);

$res->bindValue(":id", $id);

$res->execute();


echo "Editado com Sucesso!!";


?>