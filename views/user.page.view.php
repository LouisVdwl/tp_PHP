
<?php

require("../controllers/user.controller.php");

$datas =getLocation();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title> Toutes vos locations </title>
</head>
<body>
<h1>Liste de vos locations</h1>
<?php
    foreach ($datas as $data){
        echo'
            <h2>Nom de la voiture'." : ".$data["name"].'</h2>
            <ul>
                <li>Date de debut'." : ".$data["start_date"].'</li>
                <li>Date de fin'." : ".$data["end_date"].'</li>
                <li>Couleur de la voiture'." : ".$data["color"].'</li>
                <li>Marque de la voiture'." : ".$data["mark"].'</li>
                <li>Prix de la location'." : ".$data["price"].'</li>
            </ul>
            <form method="post" action="../controllers/user.controller.php">
                <input name="delete" value="'.$data["id"].'" type="hidden" />
                <input type="submit" value="Supprimer"/>
            </form>
        ';
}


