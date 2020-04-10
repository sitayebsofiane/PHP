<?php 
    require 'vendor/autoload.php';
    use namespace1\Connect;
    use namespace2\Livre;
    $con = new Connect();
    $livre = new Livre("titre","author");
    $livre->affiche();
    echo PHP_EOL;

        $sql='SELECT * FROM livre limit 5';
        $reponse = $con->getBdd()->query($sql);
        while ($donnees = $reponse->fetch())
        {
       
            echo $donnees['id'].PHP_EOL; 
            echo $donnees['title'].PHP_EOL; 
            echo $donnees['author'].PHP_EOL;
            echo"--------------------------------".PHP_EOL;
  
       
        }
        
        $reponse->closeCursor();

            