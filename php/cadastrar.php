
<?php
// incluir a conexão
/*
include("conexao.php");
$obterDados = file_get_contents("php://input");  // ?

$extrair = json_decode($obterDados);
// separar dados
// obs.: o nome "cursos" nas duas linhas abaixo e referencia ao nome cursos dado ao json no meotdo de listagem, la no json_encode("cursos"=>$variavel)
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso=$extrair->cursos->valorCurso;

//query sql
$sql = "INSERT INTO  cursos (nomeCurso,valorCurso) VALUES ('$nomeCurso',$valorCurso)";

//Executar a conexão e a pesquiso do sql
$executar = mysqli_query($conexao,$sql); // na video aula não tem a variavel $executar

// vetor para exportar os daos cadastrado
$curso=[
    'nomeCurso'=>$nomeCurso,
    'valorCurso'=>$valorCurso
];

// incapsular em um json
json_encode(['curso']=>$curso);


*/
?>