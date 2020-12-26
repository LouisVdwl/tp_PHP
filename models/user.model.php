<?php

require("utils.connexionBDD.php");


/**
 * Ajouter un user
 *
 * @param $nom
 * @param $prenom
 * @param $mail
 * @param $pass
 */
function addUser($nom, $prenom, $mail, $pass){
    $stmt = connect() ->prepare("INSERT INTO user (first_name, name, mail, password) VALUES (:first_name, :name, :mail, :password)");

    $stmt->bindParam(':name', $nom);
    $stmt->bindParam(':first_name', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt -> bindParam(':password', $pass);

    $stmt->execute();
    $stmt -> closeCursor();
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
    if($result = connect() -> query($sql)){
        $res = $result -> fetch();
        if(password_verify($pass, $res["password"])){
            $ret = $res["id"];
        }
    } else {
        echo "Aucune connexion ne correspond";
    }
    return $ret;

}

