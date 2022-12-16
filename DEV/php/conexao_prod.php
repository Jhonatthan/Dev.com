<?php
// CONEXÃO COM O BANCO DE DADOS
$host = "localhost";
$user = "root";
$pass = "";
$db = "dev";

//FAZENDO CONEXÃO   
$con = mysqli_connect($host, $user, $pass);
$banco = mysqli_select_db($con, $db);

//mensagem de erro

if(mysqli_connect_errno()){
    die("Falha de conexão:" . mysqli_connect_error() . " ( " . mysqli_connect_errno() ." )");
}

// CONFIGURAR CARACTERE
mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, "SET CHARACTER_SET_CONNECTION=utf8");
mysqli_query($con, "SET CHARACTER_SET_CLIENTE=utf8");
mysqli_query($con, "SET CHARACTER_SET_RESULT=utf8");

?>