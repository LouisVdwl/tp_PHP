

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Ajouter location </title>
</head>
<body>
<h1>Louer</h1>
<form method="post" action="../controllers/location.controller.php">

    <?php
        $date = date('Y-m-d');

        echo  '<input  name="start_date" type="date" min="'.$date.'"  required>';
        echo  '<input  name="end_date" type="date" min="'.$date.'"  required>';
        echo '<input name="car_id" value="'.$_POST["car_id"].'" value type="hidden">';
    ?>

    <input name="addLocation" type="hidden">
    <input value="Ajouter" type="submit">
</form>
</body>
</html>-