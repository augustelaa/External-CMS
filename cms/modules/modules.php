<?php

class modules {

    function screen($param){
        
        $file = 'views/' . $param . '.php';
        if(file_exists($file)){
            self::contents("header");
            require $file;
            self::contents("footer");
        }else{
            self::contents("header");
            require 'views/error.php';
            self::contents("footer");
        }
    }
    
    function contents($type){
        $file = 'public/'. $type. '.html';
        if(file_exists($file)){
            require $file;
        }
    }

}