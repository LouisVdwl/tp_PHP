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
function listCar(){
    $sql = connect() -> query("SELECT * from car");
    $res = array();

    while ($row = $sql->fetch()){
        $res[] = $row;
    }
    return $res ;

}
//obtenir toutes les locations
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
//renvoie true si l'utilisateur courant est admin
function isAdmin(){
    $id = $_COOKIE["idUser"];
    $sql = "SELECT is_admin FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);

    return $result->fetch()[0];
}
function modifyLocation($start_date,$end_date,$car_id,$id){

    $sql = "UPDATE locations set start_date = :start_date, end_date = :end_date, car_id = :car_id WHERE id = :id";
    $req = connect() -> prepare($sql);

    $req -> bindParam(":start_date", $start_date);
    $req -> bindParam(":end_date", $end_date);
    $req -> bindParam(":car_id", $car_id);
    $req -> bindParam(":id", $id);

    $req -> execute();
    $req -> closeCursor();


}
