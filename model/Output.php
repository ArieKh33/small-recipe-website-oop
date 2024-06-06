<?php

// require_once("controller/RecipeController.php");

class Output
{

    public function __construct()
    {    
        // include("controller/RecipeController.php");
    }

    public function showData($recipes)
    {
        var_dump($recipes);
        
        foreach ($recipes as $key => $row) {
            echo "<h1>" .  $row . ['titel'];

    }

}
}


?>
