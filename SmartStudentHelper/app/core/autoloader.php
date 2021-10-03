<?php
    spl_autoload_register(function(string $autoload){
        $findPath = [
            ROOT."/app/core/connection.php"
        ];
        for($i=0; $i < count($findPath); $i++){
                require_once $findPath[$i];
        }
        
    });