<?php
    
    $id = $_REQUEST["id"];
    
    $livro = (new Banco)->query("SELECT * FROM livros WHERE id = :id",Livro::class,[
        "id"=>$id
    ])->fetch();

   view("livro","app",["livro"=>$livro]);