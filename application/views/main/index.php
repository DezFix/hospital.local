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
    <label>Дата рождения</label><br>
    <input type="text" name="dateofbirth"><br>
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
<form method="post">
    <input type="checkbox" name="random" checked>
    <label>добавить радном</label><br>
    <input type="submit">
</form>
<?php foreach ($persons as $val): ?>

	<h3><?php echo $val["firstname"]; ?></h3>
	<p><?php echo $val["lastname"]; ?></p>
	<p><?php echo $val["diagnosis"]; ?></p>
	<p><?php echo $val["phone"]; ?></p>
	<p><?php echo $val["address"]; ?></p>
	<p><?php echo $val["dateofbirth"]; ?></p>
	<p><?php echo $val["gender"]; ?></p>
	<p><?php echo $val["status"]; ?></p>
    <p><?php echo $val["id_doctor"]; ?></p>
	<hr>
<?php endforeach; ?>


<?php
use application\models\Main;

$diagnosis = array("Фарингіт", "Бронхіт", "Гастрит", "Хронічний стрес", "Хронічний артрит");
$rand_keys = array_rand($diagnosis, 2);


if ((!empty($_POST["firstname"])) and
    (!empty($_POST["lastname"])) and
    (!empty($_POST["diagnosis"])) and
    (!empty($_POST["phone"])) and
    (!empty($_POST["address"])) and
    (!empty($_POST["dateofbirth"])) and
    (!empty($_POST["gender"])) and
    (!empty($_POST["status"])) and
    (!empty($_POST["id_doctor"]))
){

    $person = new Main();
    $person->addPersons(


        $_POST["person_name"],
        $_POST["diagnosis"],
        $_POST["phone"],
        $_POST["address"],
        $_POST["dateofbirth"],
        $_POST["gender"],
        $_POST["status"],
        $_POST["id_doctor"]

    );
}
if (!empty($_POST["random"])){
    $api = file_get_contents('https://api.namefake.com/ukrainian-ukraine');
    $data = json_decode($api, true);

    echo "ПІБ: " . $data['name'] . "<br>";
    echo "Адреса: " . $data['address'] . "<br>";
    echo "Телефон: " . $data['phone_w'] . "<br>";
    echo "Диагноз: " . $diagnosis[$rand_keys[0]] . "<br>";
    echo "Дата нарождення: " . $data['birth_data'] . "<br>";
    $gender = preg_replace('/\d/', '', $data['pict']);
    echo "Стать: " . $gender . "<br>";
    echo "На лікуванні" . "+" . "<br>";
    echo "ID доктора" . 1 . "<br>";




}
