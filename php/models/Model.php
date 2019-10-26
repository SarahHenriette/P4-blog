<?php
require_once('baseDeDonnee.php');
class Model{

    protected $bdd;
    protected $table; 
    protected $requete;

    public function __construct(){
        $this->bdd = connexionBaseDeDonnee();
        
    }//construct



    public function recupereTout(){
        $this->requete= $this->bdd->query('SELECT * FROM billets ORDER BY date_creation DESC');

    }

    public function recupereUn(?string $where="",$id){

    $req="SELECT * FROM {$this->table}";

    if($where){
        $req .= " WHERE " . $where;
        }

        $this->requete =$this->bdd->prepare($req);
        $this->requete->execute(array( $id));
      

    }//function
}


?>



