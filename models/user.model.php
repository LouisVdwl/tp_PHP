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

    //Vérification si un User existe déjà avec cette adresse mail
    $sql =  "SELECT count(id) FROM user WHERE mail LIKE '". $mail . "'";
    $resultMail = connect() -> query($sql);
    $res = $resultMail -> fetch();

    //Si l'e-mail n'est pas déjà utilisé
    if($res == 0){
        $stmt = connect() ->prepare("INSERT INTO user (first_name, name, mail, password) VALUES (:first_name, :name, :mail, :password)");

        $stmt->bindParam(':name', $nom);
        $stmt->bindParam(':first_name', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt -> bindParam(':password', $pass);

        $stmt->execute();
        $stmt -> closeCursor();

        //Redirection vers la page de connexion
        header('Location: ../views/user.connexion.php');
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
    if($result = connect() -> query($sql)){
        $res = $result -> fetch();
        if(password_verify($pass, $res["password"])){
            $ret = $res["id"];
        }
    }
    return $ret;

}

