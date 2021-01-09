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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Mon profil</a>
                    </li>
                </ul>
                <form method="post" action="../controllers/user.controller.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Prénom</label>
                            <input name="first_name" value="<?php echo $data["first_name"] ?>" type="text" class="form-control"  required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Nom</label>
                            <input name="name" value="<?php echo $data["name"] ?>" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input name="mail" value="<?php echo $data["mail"] ?>" type="mail" class="form-control" required>
                    </div>
            </div>


            <input name="idUser" value="<?php echo $_COOKIE["idUser"] ?>" type="hidden" required>
            <input name="modifyProfil" type="hidden">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
            <hr class="my-4" />
            <div class="row mb-4">
                <div class="col-md-6">
                    <form method="post" action="../controllers/user.controller.php">
                        <div class="form-group my-3">
                            <input name="password" type="password" class="form-control" placeholder="Changer mon mot de passe">
                            <input name="changePassword" type="hidden">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Changer le mot de passe">
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>




