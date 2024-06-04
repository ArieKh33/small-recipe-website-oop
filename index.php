<?php

require_once("controller/RecipeController.php");

$controller = new RecipeController();
$controller->handleRequest();
$view = new Output();
$view->showTable();

?>