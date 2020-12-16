<?php
$args = explode('/', $_GET['url']);

if(sizeof($args) == 1 && empty($args[0])){
	
	// Controlleur par défaut, action par défaut

} else if ($args[0] == "books") {
	
	// Controlleur books
	require_once("controllers/car.controller.php");
	
	if(sizeof($args) == 2 && $args[1] == "book"){
		
		// Action book
		car();

	} else {

		// Action listBooks
		listCars();

	}
}