<?php
require("utils.connexionBDD.php");
/**
 * @param $car_id
 * @param $user_id
 * @param $duration " in days "
 */
function addLocation($car_id, $user_id, $duration){
    $today = getdate();
    $end_date = date_add($today, date_interval_create_from_date_string($duration.' days'));


    $stmt = connect() ->prepare("INSERT INTO locations (car_id, user_id,start_date,end_date) VALUES (:car_id, :user_id,:start_date,:end_date)");
    $stmt->bindParam(':car_id', $car_id);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':start_date',$today );
    $stmt -> bindParam(':end_date', $end_date);
    $stmt->execute();
    $stmt -> closeCursor();

}
function fetchData(){
    $selectCars = connect()->prepare("SELECT name, color, mark, price FROM car ");

    $selectCars->execute();

    $carsRes = $selectCars->fetchAll();

    return $carsRes;
}