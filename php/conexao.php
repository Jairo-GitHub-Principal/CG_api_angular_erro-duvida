<?php
// variaveis
$url = "localhost";
$usuario = "root";
$senha = "";
$base = "api";

// conexão

$conexao = mysqli_connect($url,$usuario,$senha,$base);//ok

// configurar  os caractere especiais , fazer com que os caracteres usado no frontend
// seja os mesmos usados no backend
mysqli_set_charset($conexao,"utf8"); // ok
?>