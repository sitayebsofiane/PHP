<?php 
    require 'vendor/autoload.php';
  
    $con = new namespace1\Connect();
    $livre = new namespace2\Livre("titre","author");
    $livre->affiche();
    echo PHP_EOL;

        $sql='SELECT * FROM livre';
        $reponse = $con->getBdd()->query($sql);
        while ($donnees = $reponse->fetch())
        {
       
            echo $donnees['id'].PHP_EOL; 
            echo $donnees['title'].PHP_EOL; 
            echo $donnees['author'].PHP_EOL;
            echo"--------------------------------".PHP_EOL;
  
       
        }
        
        $reponse->closeCursor();
            