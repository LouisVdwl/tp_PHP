<?php
require_once("utils.connexionBDD.php");
function user_is_admin(){
    $id = $_COOKIE["idUser"];
    $sql = "SELECT is_admin FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);

    return $result->fetch()[0];
}