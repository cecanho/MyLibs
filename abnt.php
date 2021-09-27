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
  <p>ABNT</p> 
</div>
<div class="container">
<div class="row text-center">
</div>
<p>
    <?php 
        foreach($livro as $l){
            echo $l['autores']." ".$l['titulo'].". ".$l['edicao'].". ".$l['cidade'].". ".$l['editora'].". ".$l['ano'].".";
        }
    ?>
</p>
</div>
<div>
<a class="btn btn-info btn-sm" style="color:#FFF" href="index.php"><strong>Voltar</strong></a>    
</div>
</body>
</html>
