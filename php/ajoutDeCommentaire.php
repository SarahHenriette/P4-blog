<?php

require_once('baseDeDonnee.php');
require_once('models/Commentaire.php');

$bdd = connexionBaseDeDonnee();
$commentaire = new Commentaire;
    
$commentaire ->ajouter($_POST["billet"],$_POST["pseudo"],$_POST["message"]);

header('Location:afficheChapitreEtCommentaire.php?billet='.$_POST["billet"]);
?>