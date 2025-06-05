<?php
  $pesquisar = $_GET["pesquisar"] ?? "";
  $dados = (new Banco)->query("SELECT * FROM livros WHERE title like :pesquisar",Livro::class,[
    "pesquisar"=>"%$pesquisar%"
  ]);

  view("index","app",["livros"=>$dados]);