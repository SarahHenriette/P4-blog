<?php

class Application{

    public static function process(){
        $controllerName = "ControllerBillet";
        $task ="index";

        if(htmlspecialchars(!empty($_GET['controller']))){
            $controllerName = ucfirst(htmlspecialchars($_GET['controller']));
        }
        if(htmlspecialchars(!empty($_GET['task']))){
            $task = htmlspecialchars($_GET['task']);
        }
        $controllerName = "\controllers\\". $controllerName;
        $controller = new $controllerName();
        $controller->$task();
    }
}