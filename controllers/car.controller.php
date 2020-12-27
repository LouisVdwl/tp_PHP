<?php

require("../models/car.model.php");

function listCars(){
	echo "Liste des livres";
}

function car(){
	echo "Livre id=".$_GET["id"];
}

//Ajout d'une voiture
if(isset($_POST["addCar"])){
    $mark = $_POST["mark"];
    $name = $_POST["name"];
    $color = $_POST["color"];
    $price = $_POST["price"];
    addCar($name, $mark, $color, $price);
    header("Location: ../views/addCar.view.php");
}