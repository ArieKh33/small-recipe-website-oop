<?php 

class Output
{

    public function __construct() {
        $this->tableHeader = FALSE;
    }

    public function showData()
    {
        while($row = $recipes->fetch(PDO::FETCH_ASSOC)) {
            // var_dump($row);

            $this->tableHeader = FALSE;
            $html = "<table>";
            // table tags neerzetten
        
            // Rij starten <tr>
        
            if ($tableHeader == FALSE) {
                $html .= "<tr>";
                foreach ($row as $key => $value) {
                    $html .= "<th>";
                    $html .= $key;
                    $html .= "</th>";
                }
                $html .= "</tr>";
            $tableHeader = TRUE;
            }
        
        
            // Voor elke value een begin en eind <td>
        
            foreach ($row as $key => $value) {
            // Voeg een <th> voor elk column
                // Als er geen "tableHeader"
            // echo de "$key" een keer
        
                $html .= "<td>";
                $html .= $value;
                $html .= "</td>";
            }
            // Afsluiten <tr>'
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }

}



?>
