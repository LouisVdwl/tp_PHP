
<?php

require("../controllers/car.controller.php");

$datas  =getLocation($_POST["view_locations"]);

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title> Liste des locations d'une voiture </title>
</head>
<body>
<?php
require_once("user.header.php");
?>
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


