<?php
require '../vendor/autoload.php';
$con = new namespace1\Connect();
$sql = 'SELECT * FROM pays;';
$reponse = $con->getBdd()->query($sql);
if (isset($_POST['idPays']) && !empty($_POST['idPays'])) {
    $idPays = $_POST['idPays'];
    echo "l'id du pays choisie est $idPays";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
            <p>
                <label for="pays">Dans quel pays habitez-vous ?</label><br />
                <select name="idPays" class="form-control">
                    <?php
                    while ($donnee = $reponse->fetch()) {
                    ?>
                        <option value=<?=$donnee['id']?>><?=$donnee['nom']?></option>
                    <?php } $reponse->closeCursor(); ?>
                </select>
            </p>
            <input type="submit" value="Envoyer" />
        </form>
    </div>
</body>

</html>