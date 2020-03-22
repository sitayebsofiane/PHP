<?php 
    require '../vendor/autoload.php';
    $con = new namespace1\Connect();
    $sql='SELECT * FROM livre';
    $reponse = $con->getBdd()->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Pagination</title>
</head>
<body>
<!--jumbotron-->
<div class="jumbotron text-light bg-dark">
  <h1 class="display-4">NFA017,pagination des livres</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p></p>
 </div>
 <!--#jumbotron-->
 <div class="container">

 <div class="row">
 <!--livres-->
 <?php 
    while ($donnees = $reponse->fetch())
    {?>
 <div class="card col-md-4" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="image">
    <div class="card-body">
        <h5 class="card-title">author:<?= $donnees['author'] ?></h5>
        <p class="card-text">titre:<?= $donnees['title'] ?></p>
        <a href="#" class="btn btn-primary">voir le livre</a>
    </div>
  </div>
    <?php }  $reponse->closeCursor();?>
<!--#livres-->
</div>
 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
</body>
</html>