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
    <input type="text" name="DateOfBirth"><br>
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
	<p><?php echo $val["DateOfBirth"]; ?></p>
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
    (!empty($_POST["DateOfBirth"])) and
    (!empty($_POST["gender"])) and
    (!empty($_POST["status"])) and
    (!empty($_POST["id_doctor"]))
){

    $person = new Main();
    $person->addPersons(

        $_POST["firstname"],
        $_POST["lastname"],
        $_POST["diagnosis"],
        $_POST["Phone"],
        $_POST["Address"],
        $_POST["DateOfBirth"],
        $_POST["gender"],
        $_POST["status"],
        $_POST["id_doctor"]


    );
}
else
{
    $api = file_get_contents('https://api.randomdatatools.ru/?count=10&params=LastName,FirstName,Phone,Login,Password,Email,Gender,DateOfBirth,Address,bankCVC');
    $data = json_decode($api, true);

    $person = new Main();
    $person->addPersons(


        $data[0]["FirstName"],
        $data[0]["LastName"],
        $data[0]["bankCVC"],
        $data[0]["Phone"],
        $data[0]["Address"],
        $data[0]["DateOfBirth"],
        $data[0]["Gender"],
        "+",
        $data[0]["bankCVC"]

);

}


//                      Test Zone
{
    $api = file_get_contents('https://api.randomdatatools.ru/?count=10&params=LastName,FirstName,Phone,Login,Password,Email,Gender,DateOfBirth,Address');
    $data = json_decode($api, true);


    echo "|Имя: " . $data[0]["FirstName"] . PHP_EOL;
    echo "|Фамилия: " . $data[0]["LastName"] . PHP_EOL;
    echo "|Номер телефона: " . str_replace('+7 (9', '+38 (0', $data[0]["Phone"]) . PHP_EOL;
    echo "|Адрес: " . $data[0]["Address"] . PHP_EOL;
    echo "|Город: " . $data[0]["DateOfBirth"] . PHP_EOL;
    echo "|Пол: " . $data[0]["Gender"] . PHP_EOL;

//var_dump($api);
}