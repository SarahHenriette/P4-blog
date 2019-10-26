<?php
require_once('models/Model.php');

class Commentaire extends Model{

//Récupere les commentaires et je les affiches
protected $table = "commentaires";


function afficher(){
    while($donnees = $this->requete->fetch()){
        ?>
        
       <div class="commentaire">
            <p><?php echo $donnees["pseudo"]?></p>
            <p><?php echo $donnees["commentaire"]?></p>
            <p><?php echo $donnees["date_commentaire"]?></p>

       </div>
       <?php
     }
}
    //Permet d'ajouter un commentaire
function ajouter($id, $pseudo,$message){
   
    if(isset($_POST['billet'])){
        $req= $this->bdd->prepare('INSERT INTO commentaires (id_billet, pseudo, commentaire, date_commentaire ) VALUES(:id_billet, :pseudo, :commentaire, NOW())');
        $req->execute(array(
            "id_billet" => $id,
            "pseudo" => $pseudo,
            "commentaire" => $message
        ));
        }
}

}//Fermeture de la class
?>