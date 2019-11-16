<?php

class Renderer{
public static function render(string $chemin,?array $variables = []){
        
    extract($variables);
    ob_start();
    require('templates/'. $chemin . '.html.php');
    $pageContent = ob_get_clean();

    require('templates/layout.html.php');
}

}
