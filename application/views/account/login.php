

<?php



use application\models\Users;

$user = new Users();

if(isset($_POST['submit'])){
    $user->login($_POST['user'], $_POST['pass']);
}
if(isset($_GET['do']) and $_GET['do'] == 'logout'){
    $user->out();
}

if (isset($_SESSION['admin'])){
    echo "Привет: " . $_SESSION['admin'] . "<br>";

    echo "<a href=\"/account/out\"><button>Выход</button></a>";
}












?>



<br />
<form  method="post">
    <p>Логин</p>
    <p><input type="text" name="user"></p>
    <p>Пароль</p>
    <p><input type="password" name="pass"></p>
    <b><input type="submit" name="submit" value="Login" /></b>
</form><br />

