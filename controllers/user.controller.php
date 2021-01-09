<?php

require_once("../models/user.model.php");

//Ajout d'un user
if(isset($_POST["inscription"])){
    $prenom = $_POST["first_name"];
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    addUser($name, $prenom, $mail, $password);
}

//Connexion d'un user
if(isset($_POST["connexion"])){
    $state = connexionUser($_POST["mail"], $_POST["password"]);
    // Si la connexion a échouée
    if($state == 0){
        header('Location: ../views/user.connexion.view.php');
    }else{
        setcookie("idUser", $state, time()+604800, "/", "localhost");
        header("Location: ../views/user.profil.view.php");
    }
}

//Modification des infos du user
if(isset($_POST["modifyProfil"])){
    modifyUser($_POST["idUser"], $_POST["first_name"], $_POST["name"], $_POST["mail"]);
    if(isset($_POST["admin"])){
        header("Location: ../views/user.list.view.php");
    }else{
        header("Location: ../views/user.profil.view.php");
    }

}
//Modification du password du user
if(isset($_POST["changePassword"])){
    changePassword($_COOKIE["idUser"], password_hash($_POST["password"], PASSWORD_DEFAULT));
    echo $_COOKIE["idUser"];
    header("Location: ../views/user.profil.view.php");
}

//Fonction qui permet d'avoir les infos d'un user par son ID
function getProfil($id){
    return getUserById($id);
}

//Function qui permet de retourner tous les users
function getAllUsers(){
    return getAllUser();
}
function getLocation(){
    $id = $_COOKIE["idUser"];

    return getLocationsOfUser($id);
}

if(isset($_POST["delete"])) {
    deleteLocation($_POST["delete"]);
    header("Location: ../views/user.page.view.php");
}

if(isset($_POST["disconnect"])){
    unset($_COOKIE["idUser"]);
    header("Location: ../views/user.connexion.php");
}

function is_admin(){
    return isAdmin($_COOKIE["idUser"]);
}

function disconnect(){
    setcookie('idUser', '', time());
    header("Location: ../views/user.connexion.view.php");
}