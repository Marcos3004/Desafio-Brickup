<?php

include_once("conexao1.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', now())";
$resultado_usuario = mysqli_query ($conn1, $result_usuario);

if(mysqli_insert_id(Sconn1)){
	S_SESSION('msg') = "Cadastro de Conta com Sucesso";
	header("location: Desafio Brickup.php");
}elese{
	header("location: Desafio Brickup.php");
}
