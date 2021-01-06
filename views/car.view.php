<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Voiture </title>
</head>
<body>

<?php
    echo '<h1>'.$_POST["name"].'</h1>';
    ?>
    <ul>
        <?php
            echo '<li>'.$_POST["color"].'</li>>';
            echo '<li>'.$_POST["mark"].'</li>>';
            echo '<li>'.$_POST["price"].'</li>>';
        ?>
    </ul>

<form method="post" action="../views/location.add.view.php">
    <?php echo'<input name="car_id" value="'.$_POST["car_id"].'" type="hidden">'; ?>
    <input value="Louer" type="submit">
</form>

</body>
</html>