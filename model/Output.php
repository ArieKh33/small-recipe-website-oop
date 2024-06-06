<?php


class Output
{

    public function __construct()
    {
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
