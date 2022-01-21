<h3>Вход</h3>
<form action="/account/login" method="post">
	<p>Логин</p>
	<p><input type="text" name="login"></p>
	<p>Пароль</p>
	<p><input type="text" name="password"></p>
	<b><button type="submit" name="log_in">Вход</button></b>
</form>

<?php

use application\models\Users;
use application\models\Main;

//if (isset($_POST["login"]) and isset($_POST["password"])){
//    echo $_POST["login"];
//    echo $_POST["password"];
//    $login = new Users();
//    $login->enter($_POST["login"], $_POST["password"]);
//}

$login=new Users();

if ($login->login()) //вызываем функцию login, которая определяет, авторизирован пользователь или нет

{
    $UID = $_SESSION['id']; //если пользователь авторизирован, присваиваем переменной $UID его id
    $admin = is_admin($UID); //определяем, админ ли пользователь

}
else //если пользователь не авторизирован, проверяем, была ли нажата кнопка входа на сайт
{
    if(isset($_POST['log_in']))
    {
        $error = $login->enter(); //функция входа на сайт

        if (count($error) == 0) //если ошибки отсутствуют, авторизируем пользователя
        {
            $UID = $_SESSION['id'];

            $admin = is_admin($UID);
            include ('index.php'); //подключается файл с формой
            header("Location: http://hospital");
            exit;
        }
        else print $error;
    }
}

?>