<?php
require_once('conecta.php');
conn();

$livro = R::dispense( 'livros' );
$livro->id = addslashes($_POST['id']);
$livro->autores = addslashes($_POST['autores']);
$livro->titulo = addslashes($_POST['titulo']);
$livro->edicao = addslashes($_POST['edicao']);
$livro->cidade = addslashes($_POST['cidade']);
$livro->editora = addslashes($_POST['editora']);
$livro->ano = addslashes($_POST['ano']);
$livro->tipo = addslashes($_POST['tipo']);
$livro->localizacao = addslashes($_POST['localizacao']);

R::begin();
try{
    $id = R::store($livro);
    header("Location: index.php");
}catch (Exception $e){
    R::rollback();
    print_r($e);
}

?>