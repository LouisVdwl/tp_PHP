<?php

require("../models/user.model.php");

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
        setcookie("idUser", $state);
        echo "Connexion réussie !";
    }
}


