<?php 
require_once("conexao.php");

if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['rg']) && isset($_POST['cpf']) && isset($_POST['cadastrar'])){
    $sql = "INSERT INTO boot(nome, sobrenome, rg, cpf) VALUES(?,?,?,?)";
    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(1, $_POST['nome']);
    $resultado->bindParam(2, $_POST['sobrenome']);
    $resultado->bindParam(3, $_POST['rg']);
    $resultado->bindParam(4, $_POST['cpf']);
    $resultado->execute();

    if($sql==true){
        echo"<script>alert('Dados inserido com sucesso');</script>";
    }else{
        echo"<script>alert('Aconteceu algum erro complete todos os dados');</script>";
    }
}else if(isset($_GET['id']) ){
    $id = $_GET['id'];
    $seleciona =$conexao->query("SELECT * FROM boot WHERE id=".$id."");
   
         while($dados = $seleciona->fetch(PDO::FETCH_ASSOC)){
                   
                  echo" <div class='modal' tabindex='-1' role='dialog' id='myModal'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>Modal title</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>
                             <form action='index.php' method='post'>
                                <div class='form-row'>
                                    <div class='form-group col-md-4'>
                                        <label for='id'>id</label>
                                        <input type='text' class='form-control' id='id' name='id' value='".$dados['id']."'>
                                    </div>
                                    <div class='form-group col-md-4'>
                                        <label for='nome'>Nome</label>
                                        <input type='text' class='form-control' id='nome' name='nome' value='".$dados['nome']."'>
                                    </div>
                                    <div class='form-group col-md-4'>
                                        <label for='sobrenome'>SobreNome</label>
                                        <input type='text' class='form-control' id='sobrenome' name='sobrenome' value='".$dados['sobrenome']."'>
                                    </div>
                                </div>
                                <div class='form-row'>
                                    <div class='form-group col-md-6'>
                                        <label for='rg'>RG</label>
                                        <input type='text' class='form-control' id='rg' name='rg' value='".$dados['rg']."'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='cpf'>CPF</label>
                                        <input type='text' class='form-control' id='cpf' name='cpf' value='".$dados['cpf']."'>
                                    </div>
                                </div>
                                
                                 <button type='submit' class='btn btn-secondary' name='editar'>Salvar Edição</button>
                                    <button type='submit' class='btn btn-primary' name='excluir'>Excluir dados</button>
                             </form>
                        </div>
                        <div class='modal-footer'>
                           
                        </div>
                        </div>
                    </div>
                    </div> ";

                    echo"";
                } 
    }else if(isset($_POST['excluir'])){
        $sql = "DELETE FROM boot WHERE id=?";
        $retorno = $conexao->prepare($sql);
        $retorno->bindParam(1,$_POST['id']);
        $retorno->execute();
    }else if(isset($_POST['editar'])){
         $sql = "UPDATE boot SET nome=?, sobrenome=?, rg=?, cpf=? WHERE id=?";
        $retorno = $conexao->prepare($sql);
        $retorno->bindParam(1,$_POST['nome']);
        $retorno->bindParam(2,$_POST['sobrnome']);
        $retorno->bindParam(3,$_POST['rg']);
        $retorno->bindParam(4,$_POST['cpf']);
        $retorno->bindParam(5,$_POST['id']);
        $retorno->execute();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserção</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        .nav>a{ color:white; font-size:1.6em;}
        .text-center{padding:50px;}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-info">
                <nav class="nav">
                    <a class="nav-link" href="">Inserir</a>
                    <a class="nav-link" href="">Listar</a>
                    <a class="nav-link" href="">Editar</a>
                    <a class="nav-link" href="">Deletar</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Inserir dados</h1>
                <form action="index.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Seu nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">SobreNome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o seu sobrenome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="rg">RG</label>
                            <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite seu Rg">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o seu CPF">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="cadastrar">Adicionar</button>
                </form>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Listagem de pessoas cadastradas</h2>
                <?php
                    echo"<table class='table'>
                            <thead>
                                <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>NOME</th>
                                <th scope='col'>SOBRENOME</th>
                                <th scope='col'>RG</th>
                                <th scope='col'>CPF</th>
                                <th scope='col'><i class='fas fa-edit' title='Editar'></i></th>
                                <th scope='col'><i class='fas fa-trash-alt' title='Excluir'></i></th>
                                </tr>
                            </thead>
                            <tbody>";
                            $resposta = $conexao->query("SELECT * FROM boot");
                            while($dados = $resposta->fetch(PDO::FETCH_ASSOC)){
                                echo "<tr>
                                        <th scope='row'>".$dados['id']."</th>
                                        <td>".$dados['nome']."</td>
                                        <td>".$dados['sobrenome']."</td>
                                        <td>".$dados['rg']."</td>
                                        <td>".$dados['cpf']."</td>
                                        <td><a href='index.php?id=".$dados['id']."' ><i class='fas fa-edit' title='Editar'></i></a></td>
                                        <td><a href='index.php?id=".$dados['id']."'name='excluir'><i class='fas fa-trash-alt' title='Excluir'></i></a></td>
                                    </tr>";
                            } 
                            echo"</tbody>
                                </table>
                            ";            
                ?>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>

$('#myModal').modal('show')
</script>
</body>
</html>