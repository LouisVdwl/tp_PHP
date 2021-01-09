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
    header("Location: ../views/car.add.view.php");

}

function getCars(){
    return listCar();
}

function getCar($id){
    return getCarById($id);
}
function getLocation($id){
    return getLocationsOfCar($id);
}

if(isset($_POST["delete"])) {
    deleteLocation($_POST["delete"]);
    header("Location: ../views/car.page.view.php");
}

if(isset($_POST["modifyCar"])){
    $mark = $_POST["mark"];
    $name = $_POST["name"];
    $color = $_POST["color"];
    $price = $_POST["price"];
    $id = $_POST["car_id"];
    modifyCar($color,$name,$mark,$price,$id);
    header("Location: ../views/car.list.view.php");
}

function is_Admin(){
    return isAdmin();
}