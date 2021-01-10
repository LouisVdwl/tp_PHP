<?php

require("../models/car.model.php");

/**
 * Fonction d'exemple
 */
function listCars(){
	echo "Liste des livres";
}

/**
 * Fonction d'exemple
 */
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

/**
 * obtenir la liste des voitures
 * @return array
 */
function getCars(){
    return listCar();
}

/**
 * obtenir infos voitures par son id
 * @param $id
 * @return mixed
 */
function getCar($id){
    return getCarById($id);
}

/**
 * obtenir infos locations par son id
 * @param $id
 * @return array
 */
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

/**
 * retourne si user est admin
 * @return mixed
 */
function is_Admin(){
    return isAdmin();
}