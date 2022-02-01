

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
    echo "Привет" . $_SESSION['admin'];
}

?>



<br />
<form method="post">
Username: <input type="text" name="user" /> <br />
Password: <input type="password" name="pass" /> <br />
<input type="submit" name="submit" value="Login" />
</form>

<a href="/account/out"><button>Выход</button></a>
