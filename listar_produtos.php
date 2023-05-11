<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3ee3491181.js" crossorigin="anonymous"></script>



</head>
<body>
    
<div class="container" style="margin-top: 40px;">

<div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>

<h3>Lista de Produtos</h3>

<table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

    <?php

    include 'conexao.php';
    $sql = "SELECT * FROM `estoque`";
    $busca = mysqli_query($conexao, $sql);
    
    while ($array = mysqli_fetch_array($busca)) {
        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];
    ?>

<tr>
    <td><?php echo $nroproduto ?></td>

    <td><?php echo $nomeproduto ?></td>

    <td><?php echo $categoria ?></td>

    <td><?php echo $quantidade ?></td>

    <td><?php echo $fornecedor ?></td>

    <td><a class="btn btn-sm btn-warning" style="color: white;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

    <a class="btn btn-sm btn-danger" style="color: white;" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a>
</td>

    <?php } ?>

    </tr>

</table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>