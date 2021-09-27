<?php
require_once("validabanco.php");
criaTabela();

$livros = R::findAll('livros');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>MyLibs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
            $("#BACK").toggle(0);
            $("#NOVO").toggle(0);
        });

        function showHidden(nomeDiv){
            $("#" + nomeDiv).toggle(100);
        }
        
        function showHiddenPass(nomeDiv){
            $("#" + nomeDiv).toggle(100);
        }
        </script>

</head>
<body class="table-dark">
<div class="nav nav-bar"> 
  <h1>MyLibs</h1>
  <p>Registro de livros</p> 
</div>
<div class="container">
    
    <strong class="text-center"><div onclick="showHidden('BACK')">+ BACKUP E RESTAURAÇÃO </strong></div> 
    <div id="BACK">
    <div class="row">
    <div class="col-sm-4">
    <a href="http://localhost/phpmyadmin" alt="Restaurar"><input type="submit" class="btn btn-primary" value="Restaurar" style="height: 35px; margin-top: 15px"></a>
        
    </div>
    <div class="col-sm-4">
      <form name="frmdump" method="post" action="dump.php">  
        <div><input type="submit" class="btn btn-success" value="Backup" style="height: 35px; margin-top: 15px"></div>
      </form>    
    </div>
    </div>
    </div>
<hr>
  <form name="frm" method="post" action="novo.php">
    <strong class="text-center"><div onclick="showHidden('NOVO')">+ NOVO </strong> </div>
    <div id="NOVO">
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="autores">AUTOR(ES)</label>
            <input type="text" class="form-control" id="autores" name="autores" placeholder="SOBRENOME1, N1; SOBRENOME2, N2.">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="titulo">TÍTULO</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="edicao">EDIÇÃO</label>
            <input type="text" class="form-control" id="edicao" name="edicao">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="cidade">CIDADE</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="editora">EDITORA</label>
            <input type="text" class="form-control" id="editora" name="editora">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="ano">ANO</label>
            <input type="text" class="form-control" id="ano" name="ano">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-5">
        <div class="form-group">
            <label for="tipo">TIPO</label>
            <input type="text" class="form-control" id="tipo" name="tipo">
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <label for="localizacao">LOCALIZAÇÃO</label>
            <input type="text" class="form-control" id="localizacao" name="localizacao">
        </div>
    </div>
    <input type="submit" class="btn btn-primary btn-sm" style="height: 30px; margin-top: 35px" value="CADASTRAR">
    </div>
    </div>  
  </form>
  <hr>
  <!-- Cabeçalho -->
  <table id="mylib" class="table table-striped table-dark table-responsive">
        <thead>
            <tr>
            <th>TÍTULO</th>
            <th>AUTORES</th>
            <th>EDIÇÃO</th>
            <th>CIDADE</th>
            <th>EDITORA</th>
            <th>ANO</th>
            <th>TIPO</th>
            <th>LOCALIZAÇÃO</th>
            <th>FUNÇÕES</th>
            </tr>
        </thead>

<!-- Corpo da tabela -->
    <?php
    foreach($livros as $l){      
       ?>
    <tbody>
            <tr>
                <td><?php echo $l['titulo']; ?></td>
                <td><?php echo $l['autores']; ?></td>
                <td><?php echo $l['edicao']; ?></td>
                <td><?php echo $l['cidade']; ?></td>
                <td><?php echo $l['editora']; ?></td>
                <td><?php echo $l['ano']; ?></td>
                <td><?php echo $l['tipo']; ?></td>
                <td><?php echo $l['localizacao']; ?></td>
                <td>
                    <a class="btn btn-info btn-sm" style="color:#FFF" href="edita.php?id=<?php echo $l['id']; ?>"><strong>Editar</strong></a>    
                    <a class="btn btn-danger btn-sm" style="color:#FFF" href="apaga.php?id=<?php echo $l['id']; ?>"><strong>Apagar</strong></a>
                    <a class="btn btn-success btn-sm" style="color:#FFF" href="abnt.php?id=<?php echo $l['id']; ?>"><strong>ABNT</strong></a>
                </td>
            </tr>

    </div>
    <?php
    }
    ?>
            </tbody>
    </table>
    
</div>
</body>
</html>