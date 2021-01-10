<?php

require_once("../controllers/location.controller.php");

$datas = GetLocation();
$cars = GetCars();

print_r($datas);
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title> Toutes les locations </title>
</head>
<body>
<?php
require_once("user.header.php");
?>
<h1>Liste des locations</h1>
<div class="container">
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
                <input value="Modifier" type="submit" class="btn btn-primary">
            </form>';
    }
?>
</div>
</body>
</html>


