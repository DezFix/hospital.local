<?php
use application\models\Doctors;
$qwery = new Doctors();
$Id_Doctor =  $_SESSION['authorize']['id'];
$person = $qwery->getPersons("SELECT * FROM public.persons WHERE id_doctor = $Id_Doctor");
?>
<?php

if (isset($_SESSION['authorize']['id'])){
    echo "<h1>Здраствуйте:  " . $_SESSION['user'] . "</h1>";
}
?>

<?php $appoint = $qwery->getPersons("SELECT * FROM public.appoint WHERE id_doctor = $Id_Doctor"); ?>

<form method="post">
    </br>
    <h3>Добавить Прием:</h3>
    <select name="phone">
        <?php
        foreach ($person as $one){
            echo "<option value='". $one["phone"] ."'>" . $one["person_name"] . "(". $one["phone"] .")". "</option>";
        }
        ?>
    </select>
    <h3>Дата:</h3>
    <input type="date" name="date" required></br>
    <h3>Время:</h3>
    <input type="time" name="time" required></br>
    </br>
    <b><button name="EnterRequest" type="submit">Отправить</button></b>
</form><br>

<form <form method="post">
    <select name="id">
        <?php
        $appoint = $qwery->qwery("SELECT appoint.id, appoint.date, appoint.time, persons.person_name, persons.phone FROM persons INNER JOIN appoint ON persons.phone = appoint.phone");

        foreach ($appoint as $one){
            echo "<option value='". $one["id"] ."'>" . $one["id"] . "(". $one["person_name"] .")". "</option>";


        }
        ?>
    </select>
    <b><button name="Delete_appoint" type="submit">Удалить</button></b>

</form>

<?php

if (isset($_POST['Delete_appoint'])){
    $query=new Doctors();
    $query->delete($_POST['id']);

}
?>


<?php
use application\models\Main;
if (isset($_POST['EnterRequest'])){
$query=new Main();

$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];


$result = $query->qwery("insert into appoint (date,time,phone,id_doctor)values('$date', '$time', '$phone', '$Id_Doctor')");
}

$appoint = $qwery->qwery("SELECT appoint.id, appoint.date, appoint.time, persons.person_name, persons.phone FROM persons INNER JOIN appoint ON persons.phone = appoint.phone");

?>
<table class="bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя Фамилия</th>
        <th>Телефон</th>
        <th>Дата</th>
        <th>Время</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($appoint as $one){ ?>
    <tr>
        <td> <?php echo $one["id"] ?> </td>
        <td> <?php echo $one["person_name"] ?> </td>
        <td> <?php echo $one["phone"] ?> </td>
        <td> <?php echo $one["date"] ?> </td>
        <td> <?php echo $one["time"] ?> </td>
    </tr>
<?php } ?>
    </tbody>
</table>


