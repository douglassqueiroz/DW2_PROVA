<?php

include 'conexao.php';

//Recebe o valor do atributo name do formulário.
$nroproduto = $_POST['nroproduto']; 
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<title>Mensagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px; text-align: center;">

<h4>Produto Adicionado com sucesso<h4>
<div style="padding-top: 20px; text-align: center;">
    <a href="index.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo Ítem</a>
</div>
