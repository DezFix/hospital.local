<?php
use application\core\Model;
use application\lib\db;
use application\models\Main;

$config = require 'application/config/db.php';
$num=0;
//$query= $this->db->query("SELECT * FROM users");
$fields= $this->db->query("SELECT * FROM fields");
foreach ($query as $doctor) {
    foreach ($fields as $field){
        $fiel = $field["field"];
        if ($fiel == "id"){
            echo '<tr data-id="' . $doctor["$fiel"] . '">';
            $num++;
            echo "<td style='width: 50px;'>$num</td>";
        }


        else
        {
            echo "<td data-filt='" . $fiel . "'>" . nl2br($doctor["$fiel"]) . "</td>";
        }
    }
    echo "<td ><button class='remove_sql' value=" . $doctor["id"] . " type='button'>X</button></td>";
    echo "</tr>";
}

?>