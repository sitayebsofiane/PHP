<?php 
    require 'vendor/autoload.php';
  
    $con = new namespace1\Connect();
    $person = new namespace2\Personne("lemaire","bruno");
    $person->affiche();
    echo PHP_EOL;

        $sql2='SELECT * FROM livre';
        $reponse = $con->getBdd()->query($sql2);
       
        while ($donnees = $reponse->fetch())
        {
       
            echo $donnees['id'].PHP_EOL; 
            echo $donnees['title'].PHP_EOL; 
            echo $donnees['author'].PHP_EOL;
            echo"--------------------------------".PHP_EOL;
  
       
        }

        $reponse->closeCursor();
            