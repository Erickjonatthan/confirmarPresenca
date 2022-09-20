<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$resposta = mysqli_real_escape_string($conexao, trim($_POST['resposta']));



$sql = "INSERT INTO ListaConvidados (nome, resposta, data_cadastro) VALUES ('$nome', '$resposta', NOW())";

if($conexao->query($sql) === TRUE) {
    $conexao->close();
}



header('Location: index.php');
exit;
