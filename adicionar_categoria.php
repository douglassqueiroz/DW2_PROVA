<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Categoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style type="text/css">
        #botao {
            background-color: #FF1168; /* Cor de fundo */
            color: #ffffff; /* Cor da letra */
            font-weight: bold;
        }
    </style>

</head>

<body>
    
    <div class="container" style="margin-top: 40px; width: 500px">

    <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

        <h4 style="margin-top: 20px;">Cadastro de Categoria</h4>
        <form action="_inserir_categoria.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Categoria</label>
            <input type="text" class="form-control" name="categoria" placeholder="Insira a categoria" autocomplete="off">
        </div>
        <div style="text-align:right">
            <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
        </div>

        </form>
        
    </div>

   
    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>