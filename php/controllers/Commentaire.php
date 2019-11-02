<?php
namespace Controllers ; 

//require_once('models/Commentaire.php');
class Commentaire{

    private $commentaire;

    public function __construct(){
        $this->commentaire = new \Models\Commentaire;
        
    }//construct

function ajouter(){


$this->commentaire->ajouter("id_billet, pseudo, commentaire, date_commentaire", ":id_billet, :pseudo, :commentaire, NOW()");
$this->commentaire ->transmetValeurPourAjouterC();

header('Location:index.php?controller=billet&task=afficheChapitreEtCommentaire&billet='.$_POST["billet"]);
    }

}
?>