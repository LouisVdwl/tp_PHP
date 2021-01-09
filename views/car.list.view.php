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
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Ajouter une voiture de location </title>
</head>
<body>
<h1>Liste des voitures</h1>
    <?php

    foreach ($datas as $data){
        echo '<form method="post" action="../views/location.add.view.php">';
        echo '<ul>';
            echo '<li>Nom :  '.$data["name"].' </li>';
            echo '<li>Couleur : '.$data["color"].' </li>';
            echo '<li>Marque : '.$data["mark"].' </li>';
            echo '<li>Prix : '.$data["price"].' </li>';

        echo '</ul>';
        echo'<input name="car_id" value="'.$data["id"].'" type="hidden">';
        echo '<input value="Louer" type="submit">
              </form>';

        if (isAdmin()==0){
            echo '
                <form method="post" action="../views/car.page.view.php">
                    <input name="view_locations" value="'.$data["id"].'" type="hidden" />
                    <input type="submit" value="Voir les locations"/>
                </form>
                <form method="post" action="../views/car.edit.view.php">
                    <input name="edit_car" value="'.$data["id"].'" type="hidden" />
                    <input type="submit" value="Editer la voiture"/>
                </form>
            ';
        }
    }
    ?>




</body>
</html>
