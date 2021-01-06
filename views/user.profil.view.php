<?php
    require("../controllers/user.controller.php");
    $data = getProfil($_COOKIE["idUser"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Mon profil </title>
</head>
<body>
<h1>Mon profil</h1>
<form method="post" action="../controllers/user.controller.php">
    <input name="first_name" value="<?php echo $data["first_name"] ?>" type="text" required>
    <input name="name" value="<?php echo $data["name"] ?>" type="text" required>
    <input name="mail" value="<?php echo $data["mail"] ?>" type="mail" required>
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


