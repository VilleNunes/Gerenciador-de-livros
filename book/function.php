<?php
    function pre($var){
        echo("<pre>");
            var_dump($var);
        echo ("<pre/>");
        die();
    }

    function abort($code){
        http_response_code($code);
        echo("Not Found");
        die();
    }

    function view($view,$template = "app",$dados = []){
        foreach($dados as $key => $value ){
            $$key = $value;
        }
        require "view/template/{$template}.php";
    }

?>