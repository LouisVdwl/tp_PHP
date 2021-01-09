
<?php

require("../controllers/user.controller.php");

$datas =getLocation();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
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


