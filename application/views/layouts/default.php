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
            <li><a href="#">test</a></li>
            <li><a href="#">test</a></li>
            <li><a href="#">test</a></li>
            <li><a href="#">test</a></li>
            <li><a href="/account/login">Вход</a></li>
            <li><a href="/account/out">!</a></li>

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

if (isset(['authorize']['id'])){
    echo "Привет: " . $_SESSION['user'] . "<br>";

    echo "<a href=\"/account/out\"><button>Выход</button></a>";
}

?>