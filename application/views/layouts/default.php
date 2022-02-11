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
        <div class="logo"><a href="/">Hospital<span class="black">.local</span><span class="gray"></span></a><p>Картотека Больных</p></div>
        <ul class="nav">


            <li><a href="/" class="active">Главная</a></li>
<!--            сделать активным-->

<!--            <li><a href="../person">Поль</a></li>-->

<!--            <li><a href="../account/register">reg</a></li>-->

<?php

            if (isset($_SESSION['authorize']['id'])){

            echo '<li><a href="/doctor/appoint">Записи на Прием</a></li>';
            echo '<li><a href="/doctor/cards">Карты Пациентов</a></li>';
            echo  '<li><a href="../account/out">Выход</a></li>';

            }
            elseif (isset($_SESSION['admin']['id'])){

                echo '<li><a href="/sql">Admin panel</a></li>';
                echo  '<li><a href="../account/out">Выход</a></li>';
            }
            else{
                echo  '<li><a href="../account/login">Вход</a></li>';
            }
?>

</div>
<?php echo $content; ?>
</body>
</html>

