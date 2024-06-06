<?php

require_once("controller/RecipeController.php");
require_once("view/main.php");

$controller = new RecipeController();

$controller->handleRequest();


?>