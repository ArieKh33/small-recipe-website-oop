<pre><?php 

echo "<table>";
while($row = $recipes->fetch(PDO::FETCH_ASSOC)) {
    // var_dump($row);

    // table tags neerzetten

    // Rij starten <tr>
    echo "<tr>";

    // Voor elke value een begin en eind <td>


    foreach ($row as $key => $value) {
    // Voeg een <th> voor elk column
        $tableHeader = FALSE;
        // Als er geen "tableHeader"
        if ($tableHeader = FALSE) {
            // loop door de keys
                echo "<th>";
                echo $key;
                echo "</th>";
            $tableHeader = TRUE;

        }
    // echo de "$key" een keer

        echo "<td>";
        echo $value;
        echo "</td>";
    }
    // Afsluiten <tr>'
    echo "</tr>";
}
echo "</table>";






?>
</pre>