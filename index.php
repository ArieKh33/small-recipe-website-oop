<?php

// require_once("model/Output.php");
// require_once("model/")

require_once("controller/RecipeController.php");
require_once("view/main.php");

$controller = new RecipeController();

$controller->handleRequest();

// var_dump($controller);



// var_dump($output);

// $output->showData();

?>