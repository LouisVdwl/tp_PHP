<?php

function connect(){
    $user = "root";
    $pass = "";

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=car_location', $user, $pass);
    } catch (Exception $exc) {
        die("Une erreur est survenu: " . $exc->getMessage());
    }

    return $bdd;
}
