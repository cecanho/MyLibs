<?php
require_once('conecta.php');
conn();
$id = addslashes($_GET['id']);
$livro = R::find( 'livros', ' id =' . $id );
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
</head>
<body class="table-dark">
<div class="nav nav-bar">  
  <h1>MyLibs</h1>
  <p>Editar</p> 
</div>
<div class="container">
  <form name="frm" method="post" action="atualiza.php">
    <div class="row">
        <?php foreach($livro as $l){?>
          <div class="col-sm-6">
        <div class="form-group">
        <input type="hidden" id="id" name="id" value="<?php echo $l['id'];?>">
            <label for="autores">AUTOR(ES)</label>
            <input type="text" class="form-control" id="autores" name="autores" value="<?php echo $l['autores'];?>">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="titulo">TÍTULO</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $l['titulo'];?>">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="edicao">EDIÇÃO</label>
            <input type="text" class="form-control" id="edicao" name="edicao" value="<?php echo $l['edicao'];?>">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="cidade">CIDADE</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $l['cidade'];?>">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="editora">EDITORA</label>
            <input type="text" class="form-control" id="editora" name="editora" value="<?php echo $l['editora'];?>">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="ano">ANO</label>
            <input type="text" class="form-control" id="ano" name="ano" value="<?php echo $l['ano'];?>">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="tipo">TIPO</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $l['tipo'];?>">
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <label for="localizacao">LOCALIZAÇÃO</label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" value="<?php echo $l['localizacao'];?>">
        </div>
    </div>
    <input type="submit" class="btn btn-sm btn-primary" style="height: 35px;margin-top: 33px" value="ATUALIZAR">
    </div>  
  </form>
  <?php } ?>
</div>
</body>
</html>