<?php

class Http {
//Permet de rediriger les pages
public static function redirection(string $url){
    header('Location:'. $url);
    exit();
}
}
    ?>