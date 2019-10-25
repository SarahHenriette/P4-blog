
<?php

$bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');

$req = $bdd->prepare('INSERT INTO billets (titre, contenue, date_creation) VALUES(:titre, :contenue, NOW())');
$req->execute(array(
    "titre" => $_POST["Titre"],
    "contenue" => $_POST["Contenue"]
));
header('Location:creerUnBillet.php');

?>