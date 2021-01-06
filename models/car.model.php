<?php

require("utils.connexionBDD.php");

function addCar($nom, $mark, $color, $price){

    $stmt = connect() ->prepare("INSERT INTO car (name, color, mark, price) VALUES (:name, :color, :mark, :price)");
    $stmt->bindParam(':name', $nom);
    $stmt->bindParam(':mark', $mark);
    $stmt->bindParam(':color', $color);
    $stmt -> bindParam(':price', $price);
    $stmt->execute();
    $stmt -> closeCursor();

}
function listCar(){
    $sql = connect() -> query("SELECT * from car");
    $res = array();

    while ($row = $sql->fetch()){
        $res[] = $row;
    }
    return $res ;

}