<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="logo"><a href="/">Hell<span class="black">Fire</span><span class="gray">.net</span></a><p>Welcome to Hell</p></div>
        <ul class="nav">


            <li><a href="/" class="active">Home</a></li>

            <li><a href="../person">Поль</a></li>

            <li><a href="../account/register">reg</a></li>

            <li><a href="/sql">SQL</a></li>
<?php

            if (isset($_SESSION['authorize']['id'])){
            echo '<li><a href="/doctor/appoint">Записи на Прием</a></li>';
            echo '<li><a href="#">Карты Пациентов</a></li>';
            echo  '<li><a href="../account/out">Exit</a></li>';
            }
            else{
                echo  '<li><a href="../account/login">Вход</a></li>';

            }
?>

</div>
<?php echo $content; ?>
</body>
</html>

<?php

use application\models\Users;

$user = new Users();

if(isset($_POST['submit'])){
    $user->login($_POST['user'], $_POST['pass']);
}
if(isset($_GET['do']) and $_GET['do'] == 'logout'){
    $user->out();
}


?>