<?php

function connect(){
    $user = "jojo";
    $pass = "9706";

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=car_location', $user, $pass);
    } catch (Exception $exc) {
        die("Une erreur est survenu: " . $exc->getMessage());
    }

    return $bdd;
}
