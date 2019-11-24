<?php

namespace Models;

abstract class Model{

    protected $bdd;
    protected $table; 
    protected $requete;

    public function __construct(){
        $this->bdd = \BaseDeDonnee::connexionBaseDeDonnee();
        
    }//construct



    public function recupereTout(string $orderBy, $booleen=null){
        $this->requete= $this->bdd->query("SELECT * FROM {$this->table} ORDER BY $orderBy ");
        if($booleen){
            $donnee = $this->requete->fetch();
        }else{
            $donnee = $this->requete->fetchAll();
        }
        return $donnee;

    }
   
    public function recupereId(string $orderBy){
        $this->requete= $this->bdd->query("SELECT id FROM {$this->table} ORDER BY $orderBy");
        return $this->requete;

    }
    public function recupereUn(?string$where="",$id,$booleen){

    $req="SELECT * FROM {$this->table}";

    if($where){
        $req .= " WHERE " . $where;
        }

        $this->requete =$this->bdd->prepare($req);
        $this->requete->execute(array( $id));
 
    if($booleen){
        $donnee = $this->requete->fetch();
    }else{
        $donnee = $this->requete->fetchAll();
    }
    return $donnee;
    }

    public function supprimer($id, $where){
        $this->requete = $this->bdd->prepare("DELETE FROM {$this->table} WHERE $where");
        $this->requete->execute(array($id));
    }


    public function ajouter(string $champ, string $valeur, array $donnee){
        $this->requete = $this->bdd->prepare("INSERT INTO {$this->table} ($champ) VALUES($valeur)");
        $this->requete->execute($donnee);
    }

    


    public function modifier(string $set, string $where,array $donnee){
   
        $this->requete = $this->bdd->prepare("UPDATE {$this->table} SET $set WHERE $where");
        $this->requete->execute($donnee);
    }

        


    public function pagination(string $orderBy, $limitDepart, $limitFin){
        $this->requete = $this->bdd->query("SELECT * FROM {$this->table} ORDER BY $orderBy DESC LIMIT $limitDepart, $limitFin");
        $donnees = $this->requete->fetchAll();
        return $donnees;
    }

  
   

}


?>



