<?php

namespace Models;


class ModelAdministrateur extends Model{

    protected $table = "administrateur";



   
    public function transmetValeurPourAjouter(){
       
        $this->requete->execute(array(
            "nom" => $_POST["nom"],
            "prenom" => $_POST["prenom"],
            "motDePasse" => password_hash($_POST["motDePasse"], PASSWORD_DEFAULT),
        ));
    }

    

}

