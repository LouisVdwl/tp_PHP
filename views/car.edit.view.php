<?php
require("../controllers/car.controller.php");
$data = getCar($_POST["edit_car"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title> Editer une voiture </title>
</head>
<body>
<?php
require_once("user.header.php");
?>
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


