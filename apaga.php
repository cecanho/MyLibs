<?php
require_once('conecta.php');
conn();
$livro = R::load( 'livros', addslashes($_GET['id']) );
R::trash( $livro );

header("Location: index.php");
?>