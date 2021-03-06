<?php

require_once("utils.connexionBDD.php");

/**
 * permet d'ajouter une voiture
 * @param $nom
 * @param $mark
 * @param $color
 * @param $price
 */
function addCar($nom, $mark, $color, $price){

    $stmt = connect() ->prepare("INSERT INTO car (name, color, mark, price) VALUES (:name, :color, :mark, :price)");
    $stmt->bindParam(':name', $nom);
    $stmt->bindParam(':mark', $mark);
    $stmt->bindParam(':color', $color);
    $stmt -> bindParam(':price', $price);
    $stmt->execute();
    $stmt -> closeCursor();

}

/**
 * Retourne la liste de toutes les voitures
 * @return array
 */
function listCar(){
    $sql = connect() -> query("SELECT * from car");
    $res = array();

    while ($row = $sql->fetch()){
        $res[] = $row;
    }
    return $res ;

}

/**
 * Retourne la liste d'infos sur une voiture gracce a un id
 * @param $idCar
 * @return mixed
 */
function getCarById($idCar){
    $id = $idCar;
    $sql = "SELECT * FROM car WHERE id = " . $id;
    $result = connect() -> query($sql);
    return $result -> fetch();
}

/**
 * Retourne la liste des locations d'une voiture
 * @param $id
 * @return array
 */
function getLocationsOfCar($id){

    $sql = 'SELECT user_id,start_date,end_date,id FROM locations WHERE car_id = '.$id;
    $datas = connect() -> query($sql) ;
    $res = array();

    foreach ($datas as $data){
        $sqlUser = 'SELECT first_name,mail,name FROM user WHERE id ='.$data["user_id"];
        $dataUser = connect() -> query($sqlUser) -> fetch();

        $res[] = array(
            "first_name" => $dataUser["first_name"],
            "mail" => $dataUser["mail"],
            "name" => $dataUser["name"],
            "id" => $data["id"],
            "start_date" => $data["start_date"],
            "end_date" => $data["end_date"]

        );
    }
    return $res;

}

/**
 * supprime une location
 * @param $id
 */
function deleteLocation($id){
    $sql = "DELETE FROM locations WHERE id =".$id;
    $req = connect() -> prepare($sql);
    $req -> execute();
    $req -> closeCursor();
}

/**
 * retourne si un user est admin
 * @return mixed
 */
function isAdmin(){
    $id = $_COOKIE["idUser"];
    $sql = "SELECT is_admin FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);

    return $result->fetch()[0];
}

/**
 * permet de modifier une voiture
 * @param $color
 * @param $name
 * @param $mark
 * @param $price
 * @param $id
 */
function modifyCar($color, $name, $mark, $price, $id){
    $sql = "UPDATE car set name = :name, color = :color, mark = :mark, price = :price WHERE id = :id";
    $req = connect() -> prepare($sql);

    $req -> bindParam(":color", $color);
    $req -> bindParam(":name", $name);
    $req -> bindParam(":mark", $mark);
    $req -> bindParam(":price", $price);
    $req -> bindParam(":id", $id);

    $req -> execute();
    $req -> closeCursor();
}