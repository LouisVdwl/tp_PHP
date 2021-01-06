<?php
require("utils.connexionBDD.php");
/**
 * @param $car_id
 * @param $user_id
 * @param $duration " in days "
 */
function addLocation($car_id, $user_id, $start_date, $end_date){

    $stmt = connect() ->prepare("INSERT INTO locations (car_id, user_id,start_date,end_date) VALUES (:car_id, :user_id,:start_date,:end_date)");
    $stmt->bindParam(':car_id', $car_id);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':start_date',$start_date );
    $stmt -> bindParam(':end_date', $end_date);
    $stmt->execute();
    $stmt -> closeCursor();

}