<?php


$bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');


if(isset($_POST['billet'])){
$req= $bdd->prepare('INSERT INTO commentaires (id_billet, pseudo, commentaire, date_commentaire ) VALUES(:id_billet, :pseudo, :commentaire, NOW())');
$req->execute(array(
    "id_billet" => $_POST["billet"],
    "pseudo" => $_POST["pseudo"],
    "commentaire" => $_POST["message"]
));
}

header('Location:afficheChapitreEtCommentaire.php?billet='.$_POST["billet"]);
?>