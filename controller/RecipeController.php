<?php 

require_once("model/RecipeLogic.php");
require_once("model/Output.php");

class RecipeController {

    public RecipeLogic $recipeLogic;
    public Output $output;

    public function __construct()
    {
        $this->recipeLogic = new RecipeLogic(); 
        $this->output = new Output();
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
        $recipes = $this->recipeLogic->listRecipes();
        $this->output->showData($recipes);
    }
}

?>

