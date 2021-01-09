<?php
require("../controllers/car.controller.php");
$data = getCar($_POST["edit_car"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Editer une voiture </title>
</head>
<body>
<h1><?php $data['name']?></h1>
<form method="post" action="../controllers/car.controller.php">
    <input name="name" value="<?php echo $data["name"] ?>" type="text" required>
    <input name="color" value="<?php echo $data["color"] ?>" type="color" required>
    <input name="mark" value="<?php echo $data["mark"] ?>" type="text" required>
    <input name="price" value="<?php echo $data["price"] ?>" type="text" required>
    <input value="<?php echo $_POST["edit_car"];?>" name="car_id" type="hidden"/>
    <input name="modifyCar" type="hidden">
    <input value="Enregistrer" type="submit">
</form>
</body>
</html>


