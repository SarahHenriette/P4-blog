<?php

namespace Models;

abstract class Model{

    protected $bdd;
    protected $table; 
    protected $requete;

    public function __construct(){
        $this->bdd = \BaseDeDonnee::connexionBaseDeDonnee();
        
    }//construct



    public function recupereTout(){
        $this->requete= $this->bdd->query("SELECT * FROM {$this->table} ORDER BY date_creation DESC");
        return $this->requete;

    }


    public function recupereUn(?string$where="",$id){

    $req="SELECT * FROM {$this->table}";

    if($where){
        $req .= " WHERE " . $where;
        }

        $this->requete =$this->bdd->prepare($req);
        $this->requete->execute(array( $id));
      return $this->requete;

    }

    public function supprimer($id){
        $this->requete = $this->bdd->prepare("DELETE FROM {$this->table} WHERE id=?");
        $this->requete->execute(array($id));
    }


    public function ajouter(string $champ, string $valeur){
        $this->requete = $this->bdd->prepare("INSERT INTO {$this->table} ($champ) VALUES($valeur)");

    }


    public function modifier(string $set, string $where){
   
        $this->requete = $this->bdd->prepare("UPDATE {$this->table} SET $set WHERE $where");
   
    }
}


?>



