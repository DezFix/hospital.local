<?php

if (isset($_SESSION['authorize']['id'])){
    echo "<h2>Здраствуйте:  " . $_SESSION['user'] . "</h2>";
}
?>
<form method="post">

    <h3>Добавить пациента</h3>

    <label>Имя Фамилия</label>
    <input name="person_name" type="text" required>
    <label>diagnosis</label>
    <input name="diagnosis" type="text" required>
    <label>phone</label>
    <input name="phone" type="text" required>
    <label>address</label>
    <input name="address" type="text" required>
    <label>dateofbirth</label>
    <input name="dateofbirth" type="text" required>
    <label>gender</label>
    <input name="gender" type="text" required>
    <label>status</label>
    <input name="status" type="text" required><br><br>

    <b><button name="createPerson" type="submit">Отправить</button></b>
</form>

<?php


use application\models\Doctors;
$qwery = new Doctors();
$Id_Doctor =  $_SESSION['authorize']['id'];
if (isset($_POST["createPerson"])){
    $person_name = $_POST["person_name"];
    $diagnosis = $_POST["diagnosis"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $dateofbirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $status = $_POST["status"];

    $qwery->query("INSERT INTO persons
    (person_name, diagnosis, phone, address, dateofbirth, gender, status, id_doctor) 
    VALUES 
    ('$person_name',
    '$diagnosis',
    '$phone',
    '$address',
    '$dateofbirth',
    '$gender',
    '$status',
    '$Id_Doctor')
     ");
}

$person = $qwery->getPersons("SELECT * FROM public.persons WHERE id_doctor = $Id_Doctor");


//    echo "Имя: " . $one["person_name"] . " - Диагноз: " . $one["diagnosis"] . "<br>";
//}

//
//$appoint = $qwery->qwery("SELECT * FROM appoint INNER JOIN persons ON persons.phone = appoint.phone");
//
//
//foreach ($appoint as $one){
////    echo "Телефон" . $one["phone"] . " - Дата" . $one["date"] . " - Время" . $one["time"] . "<br>";
//}
?>
<table class="bordered">
    <thead>
    <tr>
        <th>Имя Фамилия</th>
        <th>Диагнос</th>
        <th>Телефон</th>
        <th>Адресс</th>
        <th>Дата рождения</th>
        <th>Пол</th>
        <th>Статус</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($person as $one){ ?>
    <tr>
        <td> <?php echo $one["person_name"] ?> </td>
        <td> <?php echo $one["diagnosis"] ?> </td>
        <td> <?php echo $one["phone"] ?> </td>
        <td> <?php echo $one["address"] ?> </td>
        <td> <?php echo $one["dateofbirth"] ?> </td>
        <td> <?php echo $one["gender"] ?> </td>
        <td> <?php echo $one["status"] ?> </td>

    </tr>
    <?php } ?>
    </tbody>
</table>

