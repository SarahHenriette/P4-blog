<?php

namespace Controllers ; 


class Billet{
    public $billets;

    public function __construct(){
        $this->billets = new \Models\Billet;
        
    }//construct

//Affiche page d'accueil
function index(){

$req = $this->billets->recupereTout();
\Renderer::render('index', compact( 'req'));

}

//Affiche  un seul billet et ses commentaires
function afficheChapitreEtCommentaire(){    
$Commentaire = new \Models\Commentaire;
$commentaires = $Commentaire->recupereUn("id_billet=?",$_GET["billet"]);
$req = $this->billets->recupereUn("id=?",$_GET["billet"]);
\Renderer::render('afficheChapitreEtCommentaire', compact( 'req','commentaires'));
}

//Afficher page aministrateur
function PageAdmin(){
session_start();
//Je récupére les donnees de l'administrateur
$administrateur = new \Models\Administrateur;
$req = $administrateur->recupereUn("nom = ?",$_POST['nom']);
$admin = $req->fetch();

//Je recupere les billets pour les afficher
$billets = $this->billets->recupereTout();
\Renderer::render('pageAdmin', compact('billets', 'admin'));
}
    
//Modifie un billet
function modifier(){
$req = $this->billets->recupereUn("id=?",$_GET["billet"]);
$donnee = $req->fetch();
\Renderer::render('modifier',compact('donnee'));
}

function creer(){   

    \Renderer::render('creerUnBillet');
} 
//creer un billet
function creerPost(){
 
$this->billets->ajouter("titre, contenue, date_creation", ":titre, :contenue, NOW()");
$this->billets->transmetValeurPourAjouter();
\Http::redirection('index.php?controller=billet&task=pageAdmin');
}



function modifierPost(){
    
    $this->billets->modifier("titre= :titre, contenue= :contenue, date_creation= NOW()", "id=:id");
    $this->billets->transmetValeursPourModifier();
    \Http::redirection('index.php?controller=billet&task=pageAdmin');
}


function supprimer(){

    
    $this->billets->supprimer($_GET["billet"]);
    
    \Http::redirection('index.php?controller=billet&task=pageAdmin');

}


}



?>