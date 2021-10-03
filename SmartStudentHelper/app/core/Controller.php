<?php

class Controller{
    protected function model($model){
        require_once ROOT.'/app/models/'. $model .'.php';
        return new $model();
    }
    protected function view($view,$data=[]){
        require_once ROOT.'/app/views/'. $view .'.php';
    }
}
