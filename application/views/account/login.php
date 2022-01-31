

<?php





use application\models\Users;
use application\models\Main;
$user = new Users();
var_dump($_GET['action']);
if(isset($_GET['action']) and $_GET['action'] == "out") {
    $user->out(); //если передана переменная action, «разавторизируем» пользователя
}

if ($user->login()) //вызываем функцию login, которая определяет, авторизирован пользователь или нет

{
    $UID = $_SESSION['id']; //если пользователь авторизирован, присваиваем переменной $UID его id
    $admin = $user->is_admin($UID); //определяем, админ ли пользователь

}
else //если пользователь не авторизирован, проверяем, была ли нажата кнопка входа на сайт
{
    if(isset($_POST['log_in']))
    {
        $error = $user->enter(); //функция входа на сайт

        if (count($error) == 0) //если ошибки отсутствуют, авторизируем пользователя
        {
            $UID = $_SESSION['id'];

            $admin = $user->is_admin($UID);
        }
    }
}
if (isset($_SESSION['id'])){
    echo "Залогинен" . $_SESSION['id'];
}
?>

    <form method="post">

        Логин: <input type="text" name="login" />
        Пароль: <input type="password" name="password" />

        <input type="submit" value="Войти" name="log_in" />
    </form>

