<?php
include_once("conectaBanco.class.php");
$conecta =  new ConectaBanco();

//declaração dos valores
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$condominio = $_GET['condominio'];
$email = $_GET['email'];
$chamada = $_GET['chamada'];

//inserção dos dados
$insereChamado = "INSERT INTO chamado(nomecliente, telefone, condominio, email, chamada) 
         VALUES ('{$nome}','{$telefone}','{$condominio}','{$email}','{$chamada}')";
// cria conexão com o banco de dados

$conexao = $conecta->getConexao(); 
try {
    mysqli_query($conexao, $insereChamado);
} catch (Exception $e) {
    echo $e->getMessage();
}






