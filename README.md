# MyLibs
Registro de Acervo bibliográfico

A maior parte das pessoas tem acesso a livros, muitos compram livros, seja para leitura fictícia, seja para um trabalho acadêmico, ou desenvolvimento pessoal. MyLibs é uma aplicação escrita em PHP, JScript e MySQL para gerenciar um acervo de livros pessoais, além disso, com está será capaz de gerar referências no padrão ABNT para trabalhos acadêmicos.

<h3>Requisitos do sistema:</h3>
<ul>
  <li>Xampp - servidor Apache e MySQL.</li>
  <li>Download/Clone do projeto em um diretório em htdocs (mylib).</li>
  <li>Criação do banco de dados biblioteca.</li>
</ul>

<h3>Esquema da tabela do banco de dados:</h3>
<code>CREATE DATABASE biblioteca</code></br>
<code>CREATE TABLE `livros` (</code></br>
<code>  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,</code></br>
<code>  `autores` varchar(500),</code></br>
<code>  `titulo` varchar(300),</code></br>
<code>  `edicao` varchar(30),</code></br>
<code>  `cidade` varchar(30),</code></br>
<code>  `editora` varchar(30),</code></br>
<code>  `ano` varchar(4),</code></br>
<code>  `tipo` varchar(10),</code></br>
<code>  `localizacao` varchar(30)</code></br>
<code>) ENGINE=InnoDB DEFAULT CHARSET=latin1;</code>

<h3>Sobre</h3>
Professor Cristiano José Cecanho é formado em Sistemas de Informação (2004) pelas faculdades Claretianas, especialista em Tecnologias e Educação a Distância, programador em linguagens como JAVA, PHP, PASCAL, C, C++, Android, com conhecimentos em SQL para bancos de dados como MySQL, MS SQL Server e Firebird.
<h3>Vídeo de apoio/apresentação</h3>
<a href="https://www.youtube.com/user/crispdg">Prof. Cristiano José Cecanho</a>

