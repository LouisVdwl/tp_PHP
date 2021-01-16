<?php
$args = explode('/', $_GET['url']);



if(sizeof($args) == 1 && empty($args[0])) {
    //controleur par defaut
    header("Location: ./views/user.connexion.view.php");
}
else{

    $vue = explode('.',$args[0]);

    if($vue[0] == 'user'){
        require_once("controllers/user.controller.php");
        if($vue[1]=='profil'){
            $data = getProfil($_COOKIE["idUser"]);


        }else if($vue[1]=='page'){
            $datas =getLocation();
        }
        else if($vue[1]=='list'){
            $users = getAllUsers();
        }

    }else if($vue[0] == 'car'){
        require_once("controllers/car.controller.php");

        if($vue[1] == 'page'){
            $datas = getLocation($_POST["view_locations"]);
        }
        else if($vue[1] == 'list'){
            $datas = getCars();
            $isadmin = is_Admin();
        }
        else if($vue[1] == 'edit'){
            $data = getCar($_POST["edit_car"]);
        }

    }else if($vue[0] == 'location'){
        require_once("controllers/location.controller.php");
        if($vue[1]=='list'){
            $datas = GetLocation();
            $cars = GetCars();
        }
    }
}