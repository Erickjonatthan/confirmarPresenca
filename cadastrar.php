<?php

session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$resposta = mysqli_real_escape_string($conexao, trim($_POST['resposta']));



$sql = "select count(*) as total from listaconvidados where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
	$_SESSION['convidado_existe'] = true;
	header('Location: index.php');
	exit;
}

$sql = "INSERT INTO listaconvidados (nome, resposta, data_cadastro) VALUES ('$nome', '$resposta', NOW())";



if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: confirma.php');
exit;
?>