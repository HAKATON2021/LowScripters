<?php

class App{
    protected $controller = "home";
    protected $method = "index";
    protected $parameters = [];

    public function __construct(){
        $uri = $this->parseURI();
        //var_dump($uri);
        if(file_exists(ROOT."/app/controllers/". $uri[0] .".php")){
            $this->controller = array_shift($uri);
        }
        require_once ROOT."/app/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;
        //var_dump($this->controller);

        if(isset($uri[0])){
            if(method_exists($this->controller,$uri[0])){
                $this->method=array_shift($uri);
            }
        }
        $this->parameters=$uri;
        call_user_func_array([$this->controller,$this->method],$this->parameters);
    }

    protected function parseURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return explode("/", trim($_SERVER['REQUEST_URI'], '/'));
        }
    }
}