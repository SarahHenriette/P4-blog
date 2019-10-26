<?php
//Je me connecte a la base de donnee
function connexionBaseDeDonnee(){
$bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');
return $bdd;
}





//Recupere les donnee de l'utilisateur
function recupereDonneeAdmin(){
    $bdd = connexionBaseDeDonnee();
    $admin =$bdd->query('SELECT nom, mot_de_passe FROM administrateur ');
    $resultat = $admin->fetch();
    return $resultat;
}

//Permet de rediriger les pages
function redirection(string $url){
    header('Location:'. $url);
    exit();
}

    ?>

