<?php 

require_once("model/RecipeLogic.php");

class RecipeController {

    public function __construct()
    {
        $this->recipes = new RecipeLogic; 
    }
    
    public function handleRequest()
    {
        $op = (isset($_GET["op"])) ? $_GET["op"] : NULL;
         
        switch($op) {
            case "create":
                echo $op;
                break;
            case "read":
                echo $op;
                break;
            case "update":
                echo $op;
                break;
            case "delete":
                echo $op;
                break;
        default:
            $this->collectListRecipe();
        }
            
    }

    public function collectListRecipe()
    {
        $recipes = $this->recipes->listRecipes();
        include("view/listrecipes.php");
    }
}

?>

