<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Ajouter une voiture de location </title>
</head>
<body>
<h1>Ajouter une voiture</h1>
<form method="post" action="../controllers/car.controller.php">
    <input placeholder="Entrer le nom" type="text" name="name" required>
    <input placeholder="Entrer la marque" name="mark" type="text" required>
    <input placeholder="Entrer la couleur" name="color" type="color" required>
    <label for="price">Prix: </label>
    <input placeholder="Entrer le prix" name="price" type="number" min="0" required>
    <input name="addCar" type="hidden">
    <input value="Ajouter" type="submit">
</form>
</body>
</html>

