<?php

if (isset($_SESSION['authorize']['id'])){
    echo "<h1>Здраствуйте:  " . $_SESSION['user'] . "</h1>";
}
?><br>
<form method="post">

    <h2>Добавить Пациента:</h2><br>

    <label>Имя Фамилия</label>
    <input name="person_name" type="text" required>
    <label>Диагнос</label>
    <input name="diagnosis" type="text" required>
    <label>Телефон</label>
    <input name="phone" type="text" required>
    <label>Адрес</label>
    <input name="address" type="text" required>
    <label>Дата Рождения</label>
    <input name="dateofbirth" type="text" required>
    <label>Пол</label>
    <input name="gender" type="text" required>
    <label>Статус</label>
    <input name="status" type="text" required><br><br>

    <b><button name="createPerson" type="submit">Отправить</button></b>
</form><br>


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



?>

<form <form method="post">
    <select name="id">
        <?php
        foreach ($person as $one){
            echo "<option value='". $one["id"] ."'>" .  $one["id"] . "(". $one["person_name"] .")". "</option>";
        }
        ?>
    </select>


    <select name="fild">
        <option value="person_name">Имя Фамилия</option>
        <option value="diagnosis">Диагноз</option>
        <option value="phone">Телефон</option>
        <option value="address">Адрес</option>
        <option value="dateofbirth">Дата Рождения</option>
        <option value="gender">Пол</option>
        <option value="status">Статус</option>
               </select>


<input type="text" name="info">
    <b><button name="update_info" type="submit">Обновить</button></b>

</form>

<?php
if (isset($_POST['update_info'])){
    $query=new Doctors();
    $query->update($_POST['fild'],$_POST['info'],$_POST['id']);
//    $query->update("diagnosis", "2", "4");
}
?>



<table class="bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя Фамилия</th>
        <th>Телефон</th>
        <th>Адресс</th>
        <th>Дата рождения</th>
        <th>Пол</th>
        <th>Диагнос</th>
        <th>Статус</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($person as $one){ ?>
    <tr>
        <td> <?php echo $one["id"] ?> </td>
        <td> <?php echo $one["person_name"] ?> </td>
        <td> <?php echo $one["phone"] ?> </td>
        <td> <?php echo $one["address"] ?> </td>
        <td> <?php echo $one["dateofbirth"] ?> </td>
        <td> <?php echo $one["gender"] ?> </td>
        <td> <?php echo $one["diagnosis"] ?> </td>
        <td> <?php echo $one["status"] ?> </td>

    </tr>
    <?php } ?>
    </tbody>
</table>

