<?php
namespace Controllers ; 

//require_once('models/Commentaire.php');
class ControllerCommentaire{

    private $commentaire;

    public function __construct(){
        $this->commentaire = new \Models\ModelCommentaire;
        
    }//construct

function ajouter(){


$this->commentaire->ajouter("id_billet, pseudo, commentaire, date_commentaire, signalement", ":id_billet, :pseudo, :commentaire, NOW(), 0");
$this->commentaire ->transmetValeurPourAjouterC();

header('Location:index.php?controller=controllerBillet&task=afficheChapitreEtCommentaire&billet='.$_POST["billet"]);
    }


function signaler(){

    //Je récupere le commentaire grace à son id
    $req = $this->commentaire->recupereUn("id=?", $_GET['id']);
    $commentaireSignale = $req->fetch();
    echo $commentaireSignale['signalement'];

    //Je modifie le champ signalement, je l'incrémente de 1 a chaque fois que le commentaire est signalé
    $requete =$this->commentaire->modifier("signalement= :signalement","id= ". $_GET['id']);
    $requete->execute(array(
            "signalement" => $commentaireSignale['signalement'] +1
        ));
    //Si le commentaire est à plus de 5 signalements alors le champ signalement revient à 0 et l'administrateur va recevoir un messagee (chose que je fais dans le controleur Billet)
    if($commentaireSignale['signalement'] >=4 ){
        $commentaireSignale['signalement'] = 0;
        $signalement = 1;
    }else{
        echo "Le commentaire a bien été signalé";
    }
    \Http::redirection('index.php?controller=controllerBillet&task=afficheChapitreEtCommentaire&billet='.$_GET["billet"]);

}



}
?>