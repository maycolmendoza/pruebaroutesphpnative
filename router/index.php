<?php


class Router{



    private $handled =false;


    function __construct()
    {
        
    }

    public function get($route,$view){
      
        if($_SERVER['REQUEST_METHOD']!=='GET'){
        return false;}
        $uri= $_SERVER['REQUEST_URI'];
        if($uri === $route){
            $this->handled =true;
            return include_once(views . $view);
        }
    }




}