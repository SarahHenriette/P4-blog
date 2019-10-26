<?php

require_once('baseDeDonnee.php');
require_once('models/Billet.php');

 $bdd = connexionBaseDeDonnee();
$billet = new Billet;
$billet->supprimer($_GET["billet"]);


 redirection('pageAdministrateur.php?mdp=Forteroche');
?>