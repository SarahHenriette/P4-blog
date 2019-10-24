<?php

$bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');
$req =$bdd->prepare('SELECT * FROM billets WHERE id=? ');
$req->execute(array( $_GET["billet"]));
if(isset($_GET['billet'])){
    while($donnee = $req->fetch()){
     echo $donnee["titre"];
     echo $donnee["date_creation"];
   echo $donnee["contenue"];

    }
}


?>