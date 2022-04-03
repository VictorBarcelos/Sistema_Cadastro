<?php
// Conexão com o servidor sql

$servidor = "localhost";
$usuario = "root";
$senha ="";
$database ="cadastros";
$conectar = mysqli_connect($servidor, $usuario, $senha, $database) or die("Erro na conexão com banco de dados " . mysqli_error());?>