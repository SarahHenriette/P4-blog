<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billet simple pour l'Alaska - Jean Forteroche</title>


</head>

<body>

    <header></header>
    <nav></nav>
    <section>
        <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    </section>
    <section>
        <?php
require_once('baseDeDonnee.php');
require_once('models/Billet.php');
$bdd = connexionBaseDeDonnee();
$billet = new Billet();
//CONNEXION ADMINISTRATEUR
$admin = recupereDonneeAdmin();
echo $admin["mot_de_passe"];

/*$bdd->query('SELECT nom, mot_de_passe FROM administrateur ');
$resultat = $admin->fetch();
*/

    if( $_GET["mdp"] === $admin["mot_de_passe"] || $_POST["motDePasse"] === $admin["mot_de_passe"]){
        //AFFICHE TOUT LES BILLETS AVEC POSSIBILITES DE SUPPRIMER OU MODIFIER

        
        $billet->recupereTout();

        $billet->afficherPageAdmin();
        ?>   
        <a href="creerUnBillet.php " >Creer un nouveau chapitre</a>
      <?php     
        }else{
            redirection('index.php');
        
        }//if

            

        ?>

    </section>
    <section></section>

    <footer></footer>
</body>

</html>