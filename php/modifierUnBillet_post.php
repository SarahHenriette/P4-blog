<?php
require_once('baseDeDonnee.php');
require_once('models/Billet.php');
$billet = new Billet;  

$bdd = connexionBaseDeDonnee();

$billet->modifier();

redirection('pageAdministrateur.php?mdp=Forteroche');

?>