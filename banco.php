<?php

$hostname_conexao = "localhost";
$database_conexao = "cibite";
$username_conexao = "root";
$password_conexao = "";


//$conexao = new PDO('mysql:host=localhost;dbname=dbterra3', $username_conexao, $password_conexao) or print (mysql_error());


$conexao = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);

//$conexao = mysqli_connect($hostname_conexao, $username_conexao, $password_conexao) or die(mysqli_error("ERRO NO BANCO DE DADOS"));


//mysqli_select_db($database_conexao, $conexao);
$conexao->query("SET NAMES 'utf8'");
$conexao->query('SET character_set_connection=utf8');//E
$conexao->query('SET character_set_client=utf8');
$conexao->query('SET character_set_results=utf8');

if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
echo mysqli_connect_error();



?>