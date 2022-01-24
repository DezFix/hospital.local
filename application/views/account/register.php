<h3>Регистрация</h3>
<form method="post">
	<p>Логин</p>
	<p><input name="login"></p>
	<p>Пароль</p>
	<p><input name="password"></p>
	<b><button name="but">Регистрация</button></b>
</form>
<?php
use application\models\Users;
use application\models\Main;

$str="";
if (empty($_POST["login"]) and empty($_POST["password"]) and isset($_POST["but"]))
{
    $str="Ошибка, вы не ввели логин и пароль";
}
elseif (empty($_POST["login"]) and isset($_POST["but"]))
{
    $str="Ошибка, вы не ввели логин";
}
elseif (empty($_POST["password"]) and isset($_POST["but"]))
{
    $str="Ошибка, вы не ввели пароль";
}

elseif (isset($_POST["login"]) and isset($_POST["password"]))
{
$register = new Users();
    $pdw = $register->register( $_POST["login"], password_hash( $_POST["password"], PASSWORD_DEFAULT));
    var_dump($_POST["login"]);
}

echo $str;

?>