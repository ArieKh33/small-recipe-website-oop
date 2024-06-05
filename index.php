<?php

require_once("controller/RecipeController.php");

$controller = new RecipeController();
$controller->handleRequest();
var_dump($controller);
$output = new Output();
var_dump($output);
// $output->showData();

?>