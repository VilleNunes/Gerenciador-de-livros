<?php
    
    $id = $_REQUEST["id"];
   
    $livro = (new Banco)->livro($id);

   view("livro",["livro"=>$livro]);