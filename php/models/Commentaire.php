<?php
require_once('baseDeDonnee.php');

class Commentaire{

    
//Récupere les commentaires et je les affiches
function recupere($id){
    $bdd = connexionBaseDeDonnee();
    $requete =$bdd->prepare('SELECT * FROM commentaires WHERE id_billet=? ORDER BY date_commentaire DESC ');
    $requete->execute(array( $id));
    while($donnees = $requete->fetch()){
    ?>
    <div class="commentaire">
     <p><?php echo  $donnees["pseudo"];?></p>
     <p><?php echo $donnees["commentaire"];?></p>
     <p><?php echo "publié le " . $donnees["date_commentaire"];?></p>
    </div>
    <?php
     }
    }


    //Permet d'ajouter un commentaire
function ajouter($id, $pseudo,$message){
    $bdd = connexionBaseDeDonnee();
    if(isset($_POST['billet'])){
        $req= $bdd->prepare('INSERT INTO commentaires (id_billet, pseudo, commentaire, date_commentaire ) VALUES(:id_billet, :pseudo, :commentaire, NOW())');
        $req->execute(array(
            "id_billet" => $id,
            "pseudo" => $pseudo,
            "commentaire" => $message
        ));
        }
}

}//Fermeture de la class
?>