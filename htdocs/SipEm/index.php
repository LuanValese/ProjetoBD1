<?php
include_once("config/config.php");
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
                                <a href="http://localhost/SipEm/index.php" style="font-weight:650;" class="nav-link">Alunos</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/SipEm/indexM.php" class="nav-link">Matrículas</a>
                            </li>
                        </ul>
                    </div> 
            </div>
        </nav>
        <div class =container-fluid>
            <form class="px-4 py-3" action="envia.php" method="post"> 
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name= "nome" id="nome" class="form-control" type="text" required>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input name="cpf" id="cpf" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col">    
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input name="telefone" id="telefone" class="form-control" type="text" required>
                        </div>
                    </div> 
                    <div class="col">   
                        <div class="form-group">
                            <label for="mensalidade">Mensalidade</label>
                            <input name= "mensalidade" id="mensalidade" class="form-control" type="text" required>
                        </div>
                    </div>
                </div>
                <button type="submit"  class="btn btn-info">CADASTRAR</button>
            </form>
        </div>  
        <div class= container-fluid>
            <table class= "table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Mensalidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $linha['nome'] ?></td>
                        <td><?php echo $linha['cpf'] ?></td>
                        <td><?php echo $linha['telefone'] ?></td>
                        <td><?php echo $linha['mensalidade'] ?></td>
                        <td>
                        <button type="button" class="btn btn-secondary">
                                <a style="text-decoration: none; color: inherit;" href="atualiza.php?id=<?php echo $linha['id']?>">Editar</a> 
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
                                            O cadastro será removido definitivamente!
                                            Deseja continuar?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <button type="button" class="btn btn-info">
                                                <a style="text-decoration: none; color: inherit;" href="deleta.php?id=<?php echo $linha['id']?>">Sim</a>
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
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
