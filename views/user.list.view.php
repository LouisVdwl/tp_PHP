<?php

require("../controllers/user.controller.php");

$users = getAllUsers();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Tous les utilisateurs </title>
</head>
<body>
<h1>Liste des voitures</h1>
<?php
    foreach($users as $data){
        echo '<form method="post" action="../controllers/user.controller.php">
                <input name="first_name" value="'.$data["first_name"].'" type="text" required>
                <input name="name" value="'.$data["name"].'" type="text" required>
                <input name="mail" value="'.$data["mail"].'" type="mail" required>
                <input name="modifyProfil" type="hidden">
                <input name="admin" type="hidden">
                <input name="idUser" type="hidden" value="'.$data["id"].'">
                <input value="Modifier" type="submit">
            </form>';
    }
?>

