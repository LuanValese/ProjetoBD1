<?php
include_once("config/config.php");
include_once("busca.php");
include_once("buscaPorId.php");
include_once("buscaMatricula.php");


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
                                <a href="index.php" style="font-weight:650;" class="nav-link">Alunos</a>
                            </li>
                            <li class="nav-item">
                                <a href="indexM.php" class="nav-link">Cursos</a>
                            </li>
                        </ul>
                    </div> 
            </div>
        </nav>
        <div class =container-fluid>
           <h1> <?php echo $nome;?> </h1>

            <form class="px-4 py-3" action="enviaMatricula.php" method="post">
                <input type="hidden" name="nome" value="<?php echo $nome ?>"> 
                <input type="hidden" name="cpf" value="<?php echo $cpf ?>">    
                <input type="hidden" name="idAluno" value="<?php echo $_GET['id'] ?>">  

                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input name= "curso" id="curso" style="width:40%;" class="form-control" type="text" required>
                </div>
                <div class="form-group">
                    <label for="preco">Valor</label>
                    <input name="preco" id="preco" style="width:30%;" class="form-control" type="text" required>
                </div>

                <button type="submit"  class="btn btn-info">MATRICULAR</button>
            </form>
          
        </div>  
        <div class= container-fluid>
            <table class= "table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Curso</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php
                        $precoTotal = 0;

                        while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
                            $precoTotal += $linha['preco'];
                    ?>
                    <tr>
                        <td><?php echo $linha['curso'] ?></td>
                        <td><?php echo $linha['preco'] ?></td>
                        <td>
                            <button type="button" class="btn btn-secondary">
                                <a style="text-decoration: none; color: inherit;" href="atualizaMatricula.php?cpf=<?php echo $linha['cpf']?>">Editar</a> 
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $linha['id']?>">
                                Remover
                            </button>
                            <div class="modal fade" id="exampleModal<?php echo $linha['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            A matrícula será removida definitivamente!
                                            Deseja continuar?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <button type="button" class="btn btn-info">
                                                <a style="text-decoration: none; color: inherit;" href="deletaMatricula.php?id=<?php echo $linha['id']?>&idAluno=<?php echo $id ?>">Sim</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    <?php
                        }
                    ?>

                    <tr>    
                        <td>PREÇO TOTAL:</td>
                        <td><?php echo $precoTotal ?></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
