<?php
require_once("application/migration/create_table.php");
require_once("application/migration/drop_table.php");
?>
<h1>Admin panel</h1>
<div class="row">

    <div class="col">
        <form method="post">

                <label>Выбрать:</label>

                <select name="select_sql">
                    <option value=" <?php echo $create_1;?> ">Создать таблицу doctors</option>
                    <option value=" <?php echo $drop_1;?> ">Удалить таблицу doctors</option>
                    <option value=" <?php echo $create_2;?> ">Создать таблицу persons</option>
                    <option value=" <?php echo $drop_2;?> ">Удалить таблицу persons</option>
                    <option value=" <?php echo $create_3;?> ">Создать таблицу users</option>
                    <option value=" <?php echo $drop_3;?> ">Удалить таблицу users</option>
                    <option value=" <?php echo $create_4;?> ">Создать таблицу appoint</option>
                    <option value=" <?php echo $drop_4;?> ">Удалить таблицу appoint</option>
                </select><br><br>

                <b><button type="submit">Отправить</button></b>


            </form>
    </div>

    <div class="col">
    <form method="post">

        <h3>Добавить доктора</h3>

        <label>Имя</label>
        <input name="firstname" type="text" required>
        <label>Фамилия</label>
        <input name="lastname" type="text" required>
        <label>Телефон</label>
        <input name="phone" type="text" required>
        <label>ПРоф</label>
        <input name="profession" type="text" required>
        <label>Пол</label>
        <input name="gender" type="text" required>
        <label>Login</label>
        <input name="doc_login" type="text" required>
        <label>Password</label>
        <input name="doc_password" type="text" required><br><br>

        <b><button name="createDoctor" type="submit">Отправить</button></b>

    </form>
    </div>

    <div class="col">
    <form method="post">
        <p>Введите ваш SQL-запрос</p>
       <textarea type="text" style="width: 500px; height: 297px;" name="request" ></textarea><br><br>
        <b><button type="submit">Отправить</button></b>
    </form>
    </div>

</div>


    <div class="col">
        <form method="post">

            <label>Выбрать:</label>

            <b><button type="submit">Удалить</button></b>

            <input name="delete" value=" <?php echo $delete;?> ">
            <input type="submit">
        </form>
    </div>


<?php
use application\models\Main;
$qwery = new Main();


if(isset($_POST["request"])){
    $qwery->qwery($_POST['request']);
    echo $_POST["request"];
    }

if(isset($_POST["select_sql"])){
    $qwery->qwery($_POST['select_sql']);
}

if(isset($_POST["createDoctor"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $profession = $_POST["profession"];
    $gender = $_POST["gender"];

   $qwery->qweryLastId("INSERT INTO doctors
    (firstname, lastname, phone, profession, gender, id_doctor) 
    VALUES 
    ('$firstname',
    '$lastname',
    '$phone',
    '$profession',
    '$gender')
     ");



    $login = $_POST["doc_login"];
    $password = $_POST["doc_password"];
    $doctorid =  $qwery->id;

    $config = require 'application/config/db.php';
    $pepper = $config['pepper'];

    $pwd_peppered = hash_hmac("sha256", $password, $pepper);
    $pwd_hashed = password_hash($pwd_peppered,  PASSWORD_DEFAULT);
    $qwery->query("insert into users (login,password, doctorid, acl)values('$login','$pwd_hashed','$doctorid','doctor')");



}