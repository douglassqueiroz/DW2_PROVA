<?php

// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Define uma consulta SQL para buscar todas as categorias
$sql = "SELECT * FROM categoria";

// Executa a consulta usando a conexão do banco de dados e armazena os resultados em uma variável
$buscar = mysqli_query($conexao,$sql);

// Loop através dos resultados da consulta
while ($array = mysqli_fetch_array($buscar)) {

    // Extrai os valores das colunas 'id_categoria' e 'nome_categoria' do registro atual
    $id_categoria = $array['id_categoria'];
    $nome_categoria = $_POST['categoria'];

    // Exibe uma opção na lista suspensa para a categoria atual
?>
    <option><?php echo $nome_categoria ?></option>

    <?php 

} ?>