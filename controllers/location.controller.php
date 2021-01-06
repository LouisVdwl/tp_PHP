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
//recup donnée du model
//require vue