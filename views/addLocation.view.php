
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Ajouter location </title>
</head>
<body>
<h1>Ajouter une location</h1>
<form method="post" action="../controllers/location.controller.php">
    <input  name="duration" type="range" min="1" max="365" required>

    <!-- ICI LE CODE DE LA LISTE DEROULANTE DES VOITURS EN UTILSANT LE FETCH DATA DANS LE MODEL -->

    <input name="addLocation" type="hidden">
    <input value="Ajouter" type="submit">
</form>
</body>
</html>
