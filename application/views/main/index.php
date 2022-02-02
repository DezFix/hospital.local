<!--<p>Главная страница</p>-->
<!---->
<?php
//if (isset($_SESSION['authorize']['id'] )){
//    echo "Привет: " . $_SESSION['user'] . "<br>";
//    echo "<a href=\"/account/out\"><button>Выход</button></a>";
//}
//else
//{
//    echo '<a href="/account/login"><button>Вход</button></a>';
//}
//
//?>
<!--<form method="post">-->
<!--    <label>ИФО</label><br>-->
<!--    <input type="text" name="person_name"><br>-->
<!--    <label>Диагноз</label><br>-->
<!--    <input type="text" name="diagnosis"><br>-->
<!--    <label>Телефон</label><br>-->
<!--    <input type="text" name="phone"><br>-->
<!--    <label>Дата рождения</label><br>-->
<!--    <input type="text" name="dateofbirth"><br>-->
<!--    <label>Адрес</label><br>-->
<!--    <input type="text" name="address"><br>-->
<!--    <label>Пол</label><br>-->
<!--    <input type="text" name="gender"><br>-->
<!--    <label>Статус</label><br>-->
<!--    <input type="text" name="status"><br>-->
<!--    <label>ID доктора</label><br>-->
<!--    <input type="text" name="id_doctor"><br>-->
<!--    <br><input type="submit">-->
<!---->
<!---->
<!--</form>-->
<!--<form method="post">-->
<!--    <input type="checkbox" name="random" checked>-->
<!--    <label>добавить радном</label><br>-->
<!--    <input type="submit">-->
<!--</form>-->
<?php //foreach ($persons as $val): ?>

<!--	<h3>--><?php //echo $val["person_name"]; ?><!--</h3>-->
<!--	<p>--><?php //echo $val["diagnosis"]; ?><!--</p>-->
<!--	<p>--><?php //echo $val["phone"]; ?><!--</p>-->
<!--	<p>--><?php //echo $val["address"]; ?><!--</p>-->
<!--	<p>--><?php //echo $val["dateofbirth"]; ?><!--</p>-->
<!--	<p>--><?php //echo $val["gender"]; ?><!--</p>-->
<!--	<p>--><?php //echo $val["status"]; ?><!--</p>-->
<!--    <p>--><?php //echo $val["id_doctor"]; ?><!--</p>-->
<!--	<hr>-->
<?php //endforeach; ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
    <meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="public/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="public/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="public/css/component.css" />
    <script src="public/js/modernizr.custom.js"></script>
</head>
<body>
<div class="container">
    <ul id="gn-menu" class="gn-menu-main">
        <li class="gn-trigger">
            <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu">
                        <li class="gn-search-item">
                            <input placeholder="Search" type="search" class="gn-search">
                            <a class="gn-icon gn-icon-search"><span>Search</span></a>
                        </li>
                        <li>
                            <a class="gn-icon gn-icon-download">Downloads</a>
                            <ul class="gn-submenu">
                                <li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
                                <li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
                            </ul>
                        </li>
                        <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                        <li><a class="gn-icon gn-icon-help">Help</a></li>
                        <li>
                            <a class="gn-icon gn-icon-archive">Archives</a>
                            <ul class="gn-submenu">
                                <li><a class="gn-icon gn-icon-article">Articles</a></li>
                                <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                                <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /gn-scroller -->
            </nav>
        </li>
        <li><a href="----------">test</a></li>
        <li><a class="codrops-icon codrops-icon-prev" href="-----------"><span>go</span></a></li>
        <li><a class="codrops-icon codrops-icon-drop" href="-----------"><span>Sin</span></a></li>
        <li><a class="codrops-icon codrops-icon-drop" href="-----------"><span>Login</span></a></li>

    </ul>
    <header>
        <h1>Test <span>Test <a href="">Test</a> gg</span></h1>
    </header>
</div><!-- /container -->
<script src="public/js/classie.js"></script>
<script src="public/js/gnmenu.js"></script>
<script>
    new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
</body>
</html>

<?php
use application\models\Main;

$diagnosis = array("Фарингіт", "Бронхіт", "Гастрит", "Хронічний стрес", "Хронічний артрит");
$rand_keys = array_rand($diagnosis, 2);


if ((!empty($_POST["person_name"])) and
    (!empty($_POST["diagnosis"])) and
    (!empty($_POST["phone"])) and
    (!empty($_POST["address"])) and
    (!empty($_POST["dateofbirth"])) and
    (!empty($_POST["gender"])) and
    (!empty($_POST["status"])) and
    (!empty($_POST["id_doctor"]))
){

    $person = new Main();
    $person->addPersons(


        $_POST["person_name"],
        $_POST["diagnosis"],
        $_POST["phone"],
        $_POST["address"],
        $_POST["dateofbirth"],
        $_POST["gender"],
        $_POST["status"],
        $_POST["id_doctor"]

    );
}
if (!empty($_POST["random"])) {
//    $api = file_get_contents('https://api.namefake.com/ukrainian-ukraine');
//    $data = json_decode($api, true);
//
//    echo "ПІБ: " . $data['name'] . "<br>";
//    echo "Адреса: " . $data['address'] . "<br>";
//    echo "Телефон: " . $data['phone_w'] . "<br>";
//    echo "Диагноз: " . $diagnosis[$rand_keys[0]] . "<br>";
//    echo "Дата нарождення: " . $data['birth_data'] . "<br>";
//    $gender = preg_replace('/\d/', '', $data['pict']);
//    echo "Стать: " . $gender . "<br>";
//    echo "На лікуванні" . "+" . "<br>";
//    echo "ID доктора" . 1 . "<br>";

}