<?php

namespace Models;


class Administrateur extends Model{

    protected $table = "administrateur";


    public function recupereTout(){
        $this->requete= $this->bdd->query("SELECT * FROM {$this->table}");
        return $this->requete;

    }

   
    public function transmetValeurPourAjouter(){
       
        $this->requete->execute(array(
            "nom" => $_POST["nom"],
            "prenom" => $_POST["prenom"],
            "motDePasse" => password_hash($_POST["motDePasse"], PASSWORD_DEFAULT),
        ));
    }

    

}

