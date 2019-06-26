<?php
include_once("buscaPorId.php");
include_once("busca.php");
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/main.css">   
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> SipEm </title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class=container-fluid>
                <img src="img/novologo.png" class= "logo" class="navbar-brand" >
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="http://localhost/SipEm/index.php" class="nav-link">Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Matrículas</a>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav>
        <div class =container-fluid>
            <form class="px-4 py-3" action="envia.php" method="post"> 
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name= "nome" id="nome" type="text" class="form-control" value="<?php echo $nome?>">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input name="cpf" id="cpf" type="text" class="form-control" value="<?php echo $cpf?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input name="telefone" id="telefone" type="text" class="form-control" value="<?php echo $telefone?>">
                        </div>
                    </div> 
                    <div class="col">  
                        <div class="form-group">
                            <label for="mensalidade">Mensalidade</label>
                            <input name= "mensalidade" id="mensalidade" type="text" class="form-control"  value="<?php echo $mensalidade?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">ATUALIZAR</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
   
</html>
