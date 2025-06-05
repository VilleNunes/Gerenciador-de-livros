<?php
 

 class Livro{
    public $id;
    public $title;
    public $autor;
    public $descricao;
    public $avaliacao;
    public $userId;


    public static function make($item){
        $livro = new Livro();
        $livro->id = $item["id"];
        $livro->title = $item["title"];
        $livro->autor = $item["autor"];
        $livro->descricao = $item["descricao"];
        $livro->avaliacao = $item["avaliacao"];
        $livro->userId = $item["user_id"];

        return $livro;

    }

    
 }