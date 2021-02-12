<?php

include_once("conexao2.php");

$Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
$Descricao = filter_input(INPUT_POST, 'Descricao', FILTER_SANITIZE_STRING);
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (Name, Descricao, created) VALUES ('$Name', '$Descricao','$status', now())";
$resultado_usuario = mysqli_query ($conn2, $result_usuario);

if(mysqli_insert_id(Sconn2)){
	S_SESSION('msg') = "Tarefa cadastrada com sucesso";
	header("location: Desafio Brickup.php");
}elese{
	header("location: Desafio Brickup.php");
}
