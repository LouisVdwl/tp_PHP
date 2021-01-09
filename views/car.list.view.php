<?php
require("../controllers/car.controller.php");
$datas = getCars();
$isadmin = is_Admin();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title> Ajouter une voiture de location </title>
</head>
<body>
<h1>Liste des voitures</h1>
    <?php

    foreach ($datas as $data){
        echo '<form method="post" action="../views/location.add.view.php">';
        echo '<ul>';
            echo '<li>Nom :  '.$data["name"].' </li>';
            echo '<li>Couleur : <input type="color" value="'.$data["color"].'" disabled/> </li>';
            echo '<li>Marque : '.$data["mark"].' </li>';
            echo '<li>Prix : '.$data["price"].' </li>';

        echo '</ul>';
        echo'<input name="car_id" value="'.$data["id"].'" type="hidden">';
        echo '<input value="Louer" type="submit" class="btn btn-primary mb-1 ml-3">
              </form>';

        if (isAdmin()==1){
            echo '
            <div class="row mb-4">
                <form method="post" action="../views/car.page.view.php">
                    <input name="view_locations" value="'.$data["id"].'" type="hidden" />
                    <input type="submit" value="Voir les locations" class="btn btn-primary mb-1 ml-3"/>
                </form>
                <form method="post" action="../views/car.edit.view.php">
                    <input name="edit_car" value="'.$data["id"].'" type="hidden" />
                    <input type="submit" value="Editer la voiture" class="btn btn-primary ml-3 mb-1 mr-1"/>
                </form>
            </div>
            <hr class="my-4" />
            ';
        }else {
            echo '<hr class="my-4" />';
        }
    }
    ?>

</body>
</html>
