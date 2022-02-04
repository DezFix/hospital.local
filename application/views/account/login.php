<h1 class="login"> Вход</h1>
<form method="post" class="login">
    <h3>Логин</h3>
    <p><input name="login"></p>
    <h3>Пароль</h3>
    <p><input name="password"></p>
    <b><button name="submit">Вход</button></b>


</form>


<?php

use application\models\Users;

$user = new Users();

if(isset($_POST['submit'])){
    $user->login($_POST['login'], $_POST['password']);
}
if(isset($_GET['do']) and $_GET['do'] == 'logout'){
    $user->out();
}

if (isset($_SESSION['authorize']['id'])){
    echo "Привет: " . $_SESSION['login'] . "<br>";

    echo "<a href=\"/account/out\"><button>Выход</button></a>";

}

?>
