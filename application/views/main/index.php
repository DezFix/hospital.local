<p>Главная страница</p>
<form method="post">
    <label>Имя</label><br>
    <input type="text" name="firstname"><br>
    <label>Фамилия</label><br>
    <input type="text" name="lastname"><br>
    <label>Диагноз</label><br>
    <input type="text" name="diagnosis"><br>
    <label>Телефон</label><br>
    <input type="text" name="phone"><br>
    <label>Город</label><br>
    <input type="text" name="city"><br>
    <label>Адрес</label><br>
    <input type="text" name="address"><br>
    <label>Пол</label><br>
    <input type="text" name="gender"><br>
    <label>Статус</label><br>
    <input type="text" name="status"><br>
    <label>ID доктора</label><br>
    <input type="text" name="id_doctor"><br>
    <br><input type="submit">


</form>
<?php foreach ($persons as $val): ?>

	<h3><?php echo $val["firstname"]; ?></h3>
	<p><?php echo $val["lastname"]; ?></p>
	<p><?php echo $val["diagnosis"]; ?></p>
	<p><?php echo $val["phone"]; ?></p>
	<p><?php echo $val["address"]; ?></p>
	<p><?php echo $val["city"]; ?></p>
	<p><?php echo $val["gender"]; ?></p>
	<p><?php echo $val["status"]; ?></p>
    <p><?php echo $val["id_doctor"]; ?></p>
	<hr>
<?php endforeach; ?>


<?php
use application\models\Main;

if ((!empty($_POST["firstname"])) and
    (!empty($_POST["lastname"])) and
    (!empty($_POST["diagnosis"])) and
    (!empty($_POST["phone"])) and
    (!empty($_POST["address"])) and
    (!empty($_POST["city"])) and
    (!empty($_POST["gender"])) and
    (!empty($_POST["status"])) and
    (!empty($_POST["id_doctor"]))
){
    $person = new Main();
    $person->addPersons($_POST["firstname"],
        $_POST["lastname"],
        ["diagnosis"],
        $_POST["phone"],
        $_POST["address"],
        $_POST["city"],
        $_POST["gender"],
        $_POST["status"],
        $_POST["id_doctor"]
    );
}


