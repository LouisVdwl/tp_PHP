<?php

require("../models/location.model.php");


//Ajout 'une location
if (isset($_POST["addLocation"])) {
    $car_id = $_POST["car_id"];
    $user_id = $_COOKIE["idUser"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];


    addLocation($car_id, $user_id, $start_date, $end_date);

}

if(isset($_POST["modifyLocation"])){
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $car_id = $_POST["car_id"];
    $id = $_POST["idLocation"];

    modifyLocation($start_date,$end_date,$car_id,$id);
    header("Location: ../views/location.list.view.php");
}
function GetLocation(){

    if(isAdmin()==1){//si l'utilisateur n'est pas admin on redirige vers la page d'erreur
        header("page d'erreur");
    }else{
        return getAllLocations();
    }
}
function GetCars(){
    return listCar();
}