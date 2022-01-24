<form method="post">
    <p>Введите ваш SQL-запрос</p>
    <p><textarea type="text" style="width: 300px; height: 400px;" name="request"></textarea></p>
    <b><button type="submit" name="EnterRequest">Отправить</button></b>
</form>

<?php
use application\models\Main;
if(isset($_POST["request"])){
    $qwery = new Main();
    $qwery->qwery($_POST['request']);
    echo $_POST["request"];
}