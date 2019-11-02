<?php


class BaseDeDonnee{
//Je me connecte a la base de donnee
public static function connexionBaseDeDonnee(){
$bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');
return $bdd;
}



}


