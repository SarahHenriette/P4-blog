<?php
namespace Models;
//require_once('models/Model.php');
class Billet extends Model{

    //Recupere tout les billets
    protected $table = "billets";


//J'execute la requete pour ajouter 
function transmetValeurPourAjouter(){
    $this->requete->execute(array(

        "titre" => $_POST["Titre"],
        "contenue" => $_POST["Contenue"],
    ));
}

//J'execute la requete pour modifier
function transmetValeursPourModifier(){
    $this->requete->execute(array(
        "titre" => $_POST["titre"],
        "contenue" => $_POST["contenue"],
        "id" => $_POST["billet"]
    ));
}


}//fermeture de la Class



?>