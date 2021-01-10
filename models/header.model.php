<?php
require_once("utils.connexionBDD.php");
/**
 * permet de savoir si un user est admin
 * @return mixed
 */
function user_is_admin(){
    $id = $_COOKIE["idUser"];
    $sql = "SELECT is_admin FROM user WHERE id = " . $id;
    $result = connect() -> query($sql);

    return $result->fetch()[0];
}