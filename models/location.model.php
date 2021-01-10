<?php
require_once("utils.connexionBDD.php");
/**
 * permet d'ajouter une location
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

/**
 * Retourne la liste des voitures
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
 * Retourne la liste de toutes les locations
 * @return array
 */
function getAllLocations(){
    $sql = "SELECT * FROM locations";
    $datas = connect() -> query($sql);
    $res = array();

    foreach ($datas as $data){
        $idCar = $data["car_id"];
        $idUser = $data["user_id"];

        $sqlCar = "SELECT name, color, mark FROM car INNER JOIN locations ON car.id = locations.car_id WHERE car.id LIKE ".$idCar;
        $sqlUser = "SELECT name, first_name, mail FROM user INNER JOIN locations ON user.id = locations.user_id WHERE user.id LIKE ".$idUser;

        $dataCar = connect() -> query($sqlCar)->fetch();
        $dataUser = connect() -> query($sqlUser)->fetch();

        $res[] = array(
            "carName" => $dataCar["name"],
            "mark" => $dataCar["mark"],
            "color" => $dataCar["color"],
            "userName" => $dataUser["name"],
            "car_id" => $idCar,
            "userFisrtName" => $dataUser["first_name"],
            "mail" => $dataUser["mail"],
            "start_date" => $data["start_date"],
            "end_date" => $data["end_date"],
            "id" => $data["id"]
        );
    }

    return $res ;
}
/**
 * permet de savoir si le user est admin
 * @return mixed
 */
function isAdmin(){
    $id = $_COOKIE["idUser"];
    $sql = "SELECT is_admin FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);

    return $result->fetch()[0];
}

/**
 * permet de modifier une location
 * @param $start_date
 * @param $end_date
 * @param $car_id
 * @param $id
 */
function modifyLocation($start_date, $end_date, $car_id, $id){

    $sql = "UPDATE locations set start_date = :start_date, end_date = :end_date, car_id = :car_id WHERE id = :id";
    $req = connect() -> prepare($sql);

    $req -> bindParam(":start_date", $start_date);
    $req -> bindParam(":end_date", $end_date);
    $req -> bindParam(":car_id", $car_id);
    $req -> bindParam(":id", $id);

    $req -> execute();
    $req -> closeCursor();


}
