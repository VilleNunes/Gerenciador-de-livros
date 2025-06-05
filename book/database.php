<?php 

class Banco{
    private $db;

    public function __construct() {
        $this->db = new PDO("sqlite:sqlite.db");
    }
    

    public function query($query, $class = null,$params = []){
        
        $prepare = $this->db->prepare($query);

        if($class){
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
       
        $prepare->execute($params);
        return $prepare;
    }
   
}