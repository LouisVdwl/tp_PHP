<?php

require("../controllers/location.controller.php");

$datas = GetLocation();
$cars = GetCars();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Toutes les locations </title>
</head>
<body>
<h1>Liste des locations</h1>
<?php
    foreach($datas as $data){
        echo '<form method="post" action="../controllers/location.controller.php">
                <input name="userFisrtName" value="'.$data["userFisrtName"].'" type="text" readonly >
                <input name="userName" value="'.$data["userName"].'" type="text" readonly >
                <input name="mail" value="'.$data["mail"].'" type="mail" readonly >
                <select name="car_id" value="">
                    <option value ="'.$data["car_id"].'">'. $data["carName"]." ".$data["color"]." ".$data["mark"].'</option>
                ';

                foreach ($cars as $car){
                    echo '<option value ="'.$car["id"].'" >'. $car["name"]." ".$car["color"]." ".$car["mark"]." ".$car["price"] .'</option>';
                }

           echo '</select>
                <input name="start_date" value="'.$data["start_date"].'" type="date" required>
                <input name="end_date" value="'.$data["end_date"].'" type="date" required>
                <input name="modifyLocation" type="hidden">
                <input name="idLocation" type="hidden" value="'.$data["id"].'">
                <input value="Modifier" type="submit">
            </form>';
    }
?>


