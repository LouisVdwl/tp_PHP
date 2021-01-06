<?php
require("../controllers/car.controller.php");
$datas = getCars();
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
<form method="post" action="../views/location.add.view.php">
    <?php

    foreach ($datas as $data){
        echo '<ul>';
            echo '<li>Nom :  '.$data["name"].' </li>';
            echo '<li>Couleur : '.$data["color"].' </li>';
            echo '<li>Marque : '.$data["mark"].' </li>';
            echo '<li>Prix : '.$data["price"].' </li>';

        echo '</ul>';
        echo'<input name="car_id" value="'.$data["id"].'" type="hidden">';

    }
    ?>
    <input value="Louer" type="submit">

</form>



</body>
</html>
