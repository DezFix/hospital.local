<?php
use application\models\Doctors;
$qwery = new Doctors();
$Id_Doctor =  $_SESSION['authorize']['id'];
$person = $qwery->getPersons("SELECT * FROM public.persons WHERE id_doctor = $Id_Doctor");
?>



<form method="post">
    </br>
    <h3>Номер телефона:</h3>
    <select name="phone">
        <?php
        foreach ($person as $one){
            echo "<option>" . $one["phone"] . "</option>";
        }
        ?>
    </select>
    <h3>Дата:</h3>
    <input type="date" name="date" required></br>
    <h3>Время:</h3>
    <input type="time" name="time" required></br>
    </br>
    <b><button name="EnterRequest" type="submit">Отправить</button></b>
</form>


<?php
use application\models\Main;
if (isset($_POST['EnterRequest'])){
$query=new Main();

$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];


$result = $query->qwery("insert into appoint (date,time,phone,id_doctor)values('$date', '$time', '$phone', '$Id_Doctor')");
}

$appoint = $qwery->getPersons("SELECT * FROM public.appoint WHERE id_doctor = $Id_Doctor");


$appoint = $qwery->qwery("SELECT * FROM appoint INNER JOIN persons ON persons.phone = appoint.phone");

?>
<table class="bordered">
    <thead>
    <tr>
        <th>Имя Фамилия</th>
        <th>Дата</th>
        <th>Время</th>
        <th>Телефон</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($appoint as $one){ ?>
    <tr>
        <td> <?php echo $one["person_name"] ?> </td>
        <td> <?php echo $one["date"] ?> </td>
        <td> <?php echo $one["time"] ?> </td>
        <td> <?php echo $one["phone"] ?> </td>
    </tr>
<?php } ?>
    </tbody>
</table>


