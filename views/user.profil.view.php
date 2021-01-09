<?php
    require("../controllers/user.controller.php");
    $data = getProfil($_COOKIE["idUser"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title> Mon profil </title>
</head>
<body>
<?php
    require_once("user.header.php");
?>
<h1>Mon profil</h1>
<form method="post" action="../controllers/user.controller.php">
    <input name="first_name" value="<?php echo $data["first_name"] ?>" type="text" required>
    <input name="name" value="<?php echo $data["name"] ?>" type="text" required>
    <input name="mail" value="<?php echo $data["mail"] ?>" type="mail" required>
    <input name="idUser" value="<?php echo $_COOKIE["idUser"] ?>" type="hidden" required>
    <input name="modifyProfil" type="hidden">
    <input value="Enregistrer" type="submit">
</form>
<form method="post" action="../controllers/user.controller.php">
    <input name="password" type="password" placeholder="Changer mon mot de passe">
    <input name="changePassword" type="hidden">
    <input type="submit" value="Changer le mot de passe">
</form>
</body>
</html>


