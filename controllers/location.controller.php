<?php
require("../models/location.model.php");


//Ajout 'une location
if(isset($_POST["addLocation"])){
    $car_id = $_POST["car_id"];
    $user_id = session_get_cookie_params()["idUser"];
    $duration = $_POST["duration"];


    addLocation($car_id, $user_id, $duration);
    header("Location: ../views/addLocation.view.php");
}
