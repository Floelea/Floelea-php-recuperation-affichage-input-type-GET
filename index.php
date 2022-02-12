<?php
$nom = "";
if( isset($_GET['nom'])){
 $nom = $_GET['nom'];
};
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prenom</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
  </head>
  <body>
<div class="d-flex flex-column  ">
  <a href="/PhP/prenom" class="btn btn-warning">Je recharge </a>


            <form class="d-flex justify-content-center my-5">
              Nom : <input type="text" name="nom" class="mx-3" />
              <input type="submit" value="Afficher" />
            </form>
</div>

    <h1 class="text-center"> Hello <?php echo $nom; ?></h1>
  </body>
</html>
