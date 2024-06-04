<?php

require_once("DataHandler.php");

class RecipeLogic
{
    public function __construct()
    {
        $this->RecipeLogic = new DataHandler("localhost", "mysql","many_recipes", "bit_academy", "school2000"); 
    }

    public function listRecipes()
    {
        $sql = "SELECT * FROM recipes";
        $results = $this->RecipeLogic->readsData($sql);
        return $results;
    }

}

?>