<?php

//Incluir conexão
include("conexao.php");

//Obter Dados
$obterDados = file_get_contents("php://input");

//Extrair os dados de JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->dados->idCurso;

//SQL
$sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);



?>