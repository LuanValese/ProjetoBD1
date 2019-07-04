<?php
include_once("buscaPorIdM.php");
include_once("buscaM.php");
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
                            <a href="http://localhost/SipEm/indexM.php" style="font-weight:650;" class="nav-link">Cursos</a>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav>
        <div class =container-fluid>
            <form class="px-4 py-3" action="enviaM.php" method="post"> 
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input name= "curso" id="curso" type="text" style="width:40%;" class="form-control" value="<?php echo $curso?>">
                </div>
                <div class="form-group">
                    <label for="precoatual">Preço atual</label>
                    <input name="precoatual" id="precoatual" type="text" style="width:30%;" class="form-control" value="<?php echo $precoatual?>">
                </div>
                <button type="submit" class="btn btn-info">ATUALIZAR</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
   
</html>
