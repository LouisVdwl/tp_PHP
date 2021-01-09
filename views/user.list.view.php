<?php

require("../controllers/user.controller.php");

$users = getAllUsers();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title> Tous les utilisateurs </title>
</head>
<body>
<?php
    require_once('user.header.php');
    echo "<h1>Liste des utilisateurs</h1>";
    foreach($users as $data){
        echo '<form method="post" action="../controllers/user.controller.php">
                <ul class="list-group list-group-item">
                    <div class="form-row form-inline col-md-6 mb-3">
                        <div class="col-md-4 mb-3">
                            <label for="first_name">Prénom</label>
                            <input name="first_name" value="'.$data["first_name"].'" type="text" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">  
                            <label for="name">Nom</label>
                            <input name="name" value="'.$data["name"].'" type="text" class="form-control" required>
                        </div>   
                        <div class="col-md-4 mb-3">
                            <input name="mail" value="'.$data["mail"].'" type="mail" required>
                        </div>
                            <input name="modifyProfil" type="hidden">
                            <input name="admin" type="hidden">
                            <input name="idUser" type="hidden" value="'.$data["id"].'">
                            <input value="Modifier" type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </ul>
            </form>';
    }
?>


