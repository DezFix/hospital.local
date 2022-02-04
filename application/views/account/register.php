<h1 class="login">Регистрация</h1>
<form method="post" class="login">
	<h3>Логин</h3>
	<p><input name="login"></p>
	<h3>Пароль</h3>
	<p><input name="password"></p>
	<b><button name="submit">Регистрация</button></b>
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
    $pdw = $register->register($_POST["login"], $_POST["password"]);
    var_dump($_POST["login"]);
}

echo $str;

?>