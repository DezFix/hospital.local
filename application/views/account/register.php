<h3>Регистрация</h3>
<form method="post">
	<p>Логин</p>
	<p><input name="login"></p>
	<p>Пароль</p>
	<p><input name="password"></p>
	<b><button>Регистрация</button></b>
</form>
<?php
use application\models\Users;
use application\models\Main;

if (isset($_POST["login"]) and isset($_POST["password"])){
$register = new Users();
$register->register($_POST["login"], $_POST["password"]);

}


