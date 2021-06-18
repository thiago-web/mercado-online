<?php 
session_start();

// Inclui a conexão com o banco de dados
include('../../assets/banco/conection.php');

// Estabele as variáveis

$categ_prod  = $_POST['categoria_produto'];
$nome_prod   = $_POST['nome_produto'];
$preco_prod  = $_POST['preco_produto'];
$desc_prod   = $_POST['descricao_produto'];
$imagem_prod = $_POST['imagem_produto'];

// Faz a query
$insert_produto = "INSERT INTO produtos(nome_produto, preco_produto, descricao_produto, id_categoria, imagem_produto) 
				   VALUES ('$nome_prod','$preco_prod', '$desc_prod', '$categ_prod', '$imagem_prod')";
// Resultado da query
$insert_result = mysqli_query($conect, $insert_produto);

?>
