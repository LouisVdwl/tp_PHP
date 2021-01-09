
<?php

require("../controllers/car.controller.php");

$datas  =getLocation($_POST["view_locations"]);

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Liste des locations d'une voiture </title>
</head>
<body>
<h1>Liste des locations </h1>
<?php
foreach ($datas as $data){
    echo'
            <h2>Nom de l utilisateur'." : ".$data["name"]." ".$data["first_name"].'</h2>
            <ul>
                <li>mail'." : ".$data["mail"].'</li
                <li>Date de debut'." : ".$data["start_date"].'</li>
                <li>Date de fin'." : ".$data["end_date"].'</li>
                
            </ul>
            <form method="post" action="../controllers/user.controller.php">
                <input name="delete" value="'.$data["id"].'" type="hidden" />
                <input type="submit" value="Supprimer"/>
            </form>
        ';
}


