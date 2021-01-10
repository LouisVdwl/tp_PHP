<?php

require_once("utils.connexionBDD.php");


/**
 * Ajouter un user
 *
 * @param $nom
 * @param $prenom
 * @param $mail
 * @param $pass
 */
function addUser($nom, $prenom, $mail, $pass){

    //Vérification si un User existe déjà avec cette adresse mail
    $sql =  "SELECT count(id) FROM user WHERE mail LIKE '". $mail . "'";
    $resultMail = connect() -> query($sql);
    $res = $resultMail -> fetch();

    //Si l'e-mail n'est pas déjà utilisé
    if($res[0] == 0){
        $stmt = connect() ->prepare("INSERT INTO user (first_name, name, mail, password) VALUES (:first_name, :name, :mail, :password)");

        $stmt->bindParam(':name', $nom);
        $stmt->bindParam(':first_name', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt -> bindParam(':password', $pass);

        $stmt->execute();
        $stmt -> closeCursor();

        //Redirection vers la page de connexion
        header('Location: ../views/user.connexion.view.php');
    }else{
        header('Location: ../views/user.inscription.view.php');
        echo "inscription impossible !";
    }
}

/**
 * Connexion d'un user
 *
 * @param $mail
 * @param $pass
 * @return int|mixed
 */
function connexionUser($mail, $pass){
    $ret = 0;
    $sql =  "SELECT id, password FROM user WHERE mail LIKE '". $mail . "'";
    $result = connect() -> query($sql);
    $res = $result -> fetch();
    if(password_verify($pass, $res["password"])){
        $ret = $res["id"];
    }
    return $ret;
}

/**
 * Retourne la liste d'infos d'un user par son id
 * @param $idUser
 * @return mixed
 */
function getUserById($idUser){
    $id = $idUser;
    $sql = "SELECT * FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);
    return $result -> fetch();
}

/**
 * permet de modifier un user
 * @param $id
 * @param $first_name
 * @param $name
 * @param $mail
 */
function modifyUser($id, $first_name, $name, $mail){
    $sql = "UPDATE user set first_name = :first_name, name = :name, mail = :mail WHERE id = :id";
    $req = connect() -> prepare($sql);

    $req -> bindParam(":first_name", $first_name);
    $req -> bindParam(":name", $name);
    $req -> bindParam(":mail", $mail);
    $req -> bindParam(":id", $id);

    $req -> execute();
    $req -> closeCursor();
}

/**
 * permet de modifier le mot de passe d'un user
 * @param $id
 * @param $password
 */
function changePassword($id, $password){
    $sql = "UPDATE user set password = :password WHERE id = :id";
    $req = connect() -> prepare($sql);

    $req -> bindParam(":password", $password);
    $req -> bindParam(":id", $id);

    $req -> execute();
    $req -> closeCursor();
}

/**Retourne la liste de tous les users
 * @return false|PDOStatement
 */
function getAllUser(){
    $sql = "SELECT * FROM user";
    $result = connect() -> query($sql);
    return $result;
}

/**
 * Retourne la liste des locations d'un user
 * @param $id
 * @return array
 */
function getLocationsOfUser($id){

    $sql = 'SELECT car_id,start_date,end_date,id FROM locations WHERE user_id = '.$id;
    $datas = connect() -> query($sql) ;
    $res = array();

    foreach ($datas as $data){
        $sqlCar = 'SELECT name,color,mark,price FROM car WHERE id ='.$data["car_id"];
        $dataCar = connect() -> query($sqlCar) -> fetch();

        $res[] = array(
            "start_date" => $data["start_date"],
            "end_date" => $data["end_date"],
            "name" => $dataCar["name"],
            "color" => $dataCar["color"],
            "mark" => $dataCar["mark"],
            "price" => $dataCar["price"],
            "id" => $data["id"]
        );
    }
    return $res;

}

/**
 * permet de supprimer une location
 * @param $id
 */
function deleteLocation($id){
    $sql = "DELETE FROM locations WHERE id =".$id;
    $req = connect() -> prepare($sql);
    $req -> execute();
    $req -> closeCursor();
}

/**
 * permet de savoir si un user est admin
 * @param $id
 * @return mixed
 */
function isAdmin($id){
    $sql = "SELECT is_admin FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);

    return $result->fetch()[0];
}


