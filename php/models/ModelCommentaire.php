<?php

namespace Models;
//require_once('models/Model.php');

class ModelCommentaire extends Model{

//Récupere les commentaires et je les affiches
protected $table = "commentaires";



    //J'execute la requete pour ajouter
function transmetValeurPourAjouterC(){
        $this->requete->execute(array(
            "id_billet" => $_POST["billet"],
            "pseudo" => $_POST["pseudo"],
            "commentaire" => $_POST["message"]
 
        ));
    }

    function transmetValeurPourModifier(){

        $this->requete->execute(array(
            "signalement" => $commentaireSignale['signalement'] +1
 
        ));
    }
        
}//Fermeture de la class
?>