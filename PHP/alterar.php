<?php

//Incluir conexão
include("conexao.php");

//Obter Dados
$obterDados = file_get_contents("php://input");

//Extrair os dados de JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->dados->idCurso;
$nomeCurso = $extrair->dados->nomeCurso;
$valorCurso = $extrair->dados->valorCurso;

//SQL
$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);


// Exportar os dados cadastrados 
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso'] => $curso);


?>