
<form method="post">
    </br>
    <h3>Номер телефона:</h3>
    <input type="text" name="phone" placeholder="380"></br>
    <h3>Дата:</h3>
    <input type="date" name="date"></br>
    <h3>Время:</h3>
    <input type="time" name="time"></br>
    <h3>ID доктора:</h3>
    <input type="text" name="id_doctor"></br>
    </br>
    <input type="submit" name="EnterRequest"></br>
</form>

<!--<b><button type="submit" name="EnterRequest">Отправить</button></b>-->
<?php
use application\core\Model;
use application\lib\db;
use application\models\Main;
if (isset($_POST['but'])){
$query=new Main();

$date=$_POST['date'];
$time=$_POST['time'];
$phone=$_POST['phone'];
$id_doctor=$_POST['id_doctor'];

$result = $query->qwery("insert into appoint (date,time,phone,id_doctor)values('$date', '$time', '$phone', '$id_doctor')");
var_dump($result);
}
?>