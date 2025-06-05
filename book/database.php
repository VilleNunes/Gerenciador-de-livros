<?php 

class Banco{
    private $db;

    public function __construct() {
        $this->db = new PDO("sqlite:sqlite.db");
    }
    
 

    public function livros(){
        
        $items = $this->db->query("SELECT * FROM livros")->fetchAll();
        return array_map(fn($item)=>Livro::make($item),$items);
    }

    public function livro($id = null){
        $items = $this->db->query("SELECT * FROM livros WHERE id = $id")->fetchAll();
  
        return array_map(fn($item)=>Livro::make($item),$items)[0];
    }
        
}