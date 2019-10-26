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

    <header>
    <form action="pageAdministrateur.php?mdp=" method="POST">

    <input type="text" name="nom" id="nom" placeholder="Nom">
    <input type="password" name="motDePasse" placeholder="Mot de passe">
    <input type="submit" value="Connexion">
    
    <form>
    
    </header>
    <nav></nav>
    <section>
        <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    </section>
    <section>
        <?php

            require_once('baseDeDonnee.php');
            require_once('models/Billet.php');
            $billet = new Billet;
//Connexion a la base de donnee 
            connexionBaseDeDonnee();
            $billet->recupereTout();
            
            
//Affichage des billets
?>

           <?php $billet->afficher();?>
                
        </div>

       

    </section>
    <section></section>

    <footer></footer>
</body>

</html>