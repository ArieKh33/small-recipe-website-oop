<?php

require_once("DataHandler.php");

class RecipeLogic
{
    public DataHandler $dataHandler;

    public function __construct()
    {
        $this->dataHandler = new DataHandler("localhost", "mysql","many_recipes", "bit_academy", "school2000"); 
    }

    public function listRecipes()
    {
        $sql = "SELECT titel, datum, likes,  writers.writerName FROM recipes
        INNER JOIN writers ON recipes.writer_id = writers.id";

        $results = $this->dataHandler->readData($sql);
        return $results;
    }

}

?>