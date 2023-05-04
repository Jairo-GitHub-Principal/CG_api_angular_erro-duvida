<?php
// incluir a conexão
include("conexao.php");

//query sql
$sql = "SELECT * FROM  cursos";

//Executar a conexão e a pesquiso do sql
$executar = mysqli_query($conexao,$sql);

// vetor
$cursos=[];

// indice
$indice=0;

// laço de repetição para percorrer a tabela e listar os dados
while($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso']= $linha['idCurso'];
    $cursos[$indice]['nomeCurso']= $linha['nomeCurso'];
    $cursos[$indice]['valorCurso']= $linha['valorCurso'];
    $indice++;
}
// incapsular em um json
json_encode(['cursos'=>$cursos]);
var_dump($cursos);
?>