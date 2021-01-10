<?php
require_once("../models/header.model.php");
    function is_user_admin(){
        return user_is_admin($_COOKIE["idUser"]);
    }