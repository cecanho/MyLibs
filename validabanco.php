<?php
//validador de banco e tabelas criadas
require_once("conecta.php");
conn();
//verifica se a tabela existe, caso não, a função cria a tabela senhas
function criaTabela()
{
    $sql = "CREATE TABLE IF NOT EXISTS `livros`(
        `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        `autores` varchar(500),
        `titulo` varchar(300),
        `edicao` varchar(30),
        `cidade` varchar(30),
        `editora` varchar(30),
        `ano` varchar(4),
        `tipo` varchar(10),
        `localizacao` varchar(30)
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
      ";
    
    R::exec($sql);
}

?>