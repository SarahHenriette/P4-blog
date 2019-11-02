<?php

namespace Controllers ; 


class Administrateur{


    function deconnexion(){
        session_start();
        $_SESSION =array();
        session_destroy();
    
        \Http::redirection('index.php');
    }

    function nouveauAdministrateur(){
    $administrateur = new \Models\Administrateur;
    $administrateur->ajouter("nom, prenom, motDePasse", ":nom, :prenom, :motDePasse");
    $administrateur->transmetValeurPourAjouter();
    }
}