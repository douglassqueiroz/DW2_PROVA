<?php
    
    include 'conexao.php';

    $categoria = $_POST['categoria']; //Recebe o valor do atributo name do formulário.

    $sql = "INSERT INTO `categoria`(`categoria`) VALUES ('$categoria')";
    
    $inserir = mysqli_query($conexao, $sql);
    
    header("Location:http://localhost/loja/nova_loja/DougStock/index.php");
    


?>
