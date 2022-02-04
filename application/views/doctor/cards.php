

<form method="post">
//
    <input name="show" type="submit">
</form>
<table>
<?php
use application\core\Model;
use application\lib\db;
use application\models\Main;
if (isset($_POST['show'])){
//$config = require 'application/config/db.php';
$num=0;
$qwery=new Main();
$chek="SELECT * FROM users";
$query= $qwery->qwery($chek);
    var_dump($query);
$fields= $qwery->qwery("SELECT * FROM fields");
    var_dump($fields);
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
}
?>
</table>
