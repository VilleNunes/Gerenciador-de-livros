<?php
  
  $dados = (new Banco)->livros();
  view("index",["livros"=>$dados]);