<div class="content">
    <div class="rightCol">
        <ul class="rightNav">
            <li><a href="#">Natus error sit voluptatem</a></li>
            <li><a href="#">Et veritatis quasi</a></li>
            <li><a href="#">Vitae dicta sunt explicabo</a></li>
            <li><a href="#">Nectun sed quia conseq</a></li>
            <li><a href="#">Natus error sit voluptatem</a></li>
            <li><a href="#">Vitae dicta sunt explicabo</a></li>
            <li><a href="#">Et veritatis quasi</a></li>
            <li><a href="#">Nectun sed quia conseq</a></li>
            <li><a href="#">Natus error sit voluptatem</a></li>
            <li><a href="#">Vitae dicta sunt explicabo</a></li>
        </ul>
        <div class="block">
            <h3>Lorem ipsum dolor sit</h3>
            <p><i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</i></p>
            <p><a href="#" class="more">Read more »</a></p>
        </div>
    </div>
    <div class="main">
        <h1>What we do</h1>
        <p>Lorem ipsum dolor sit amet, <a href="#" title="link">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b title="bold">reprehenderit in voluptate velit</b> esse cillum dolore eu fugiat nulla pariatur. <i title="italic">Excepteur sint occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt.</p>
        <!--Изображения-->
        <h2>Images</h2>
        <p><img src="/public/images/img1.jpg"><img src="/public/images/img2.jpg"><img src="/public/images/img3.jpg"></p>
        <!--Списки и определения-->
        <h2>Lists and Descriptions</h2>
        <div class="row">
            <div class="col">
                <ul>
                    <li>Sed ut perspiciatis unde omnis iste</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>At vero eos et accusamus et iusto</li>
                    <li>Et harum quidem rerum facilis</li>
                </ul>
            </div>
            <div class="col">
                <ol>
                    <li>Sed ut perspiciatis unde omnis iste</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>At vero eos et accusamus et iusto</li>
                    <li>Et harum quidem rerum facilis</li>
                </ol>
            </div>
            <div class="col">
                <dl>
                    <dt>Sed ut perspiciatis unde omnis iste</dt>
                    <dd>Lorem ipsum dolor sit amet</dd>
                    <dt>At vero eos et accusamus et iusto</dt>
                    <dd>Et harum quidem rerum facilis</dd>
                </dl>
            </div>
        </div>
        <!--Таблица-->
        <h2>Table</h2>
        <table class="bordered">
            <thead>
            <tr>
                <th>Purcus</th>
                <th>Hantis</th>
                <th>Mastron</th>
                <th>Jevicon</th>
                <th>Language</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Gitsome</td>
                <td>Some one</td>
                <td>Take mose</td>
                <td>Likbes</td>
                <td>Racounter</td>
            </tr>
            <tr>
                <td>Linkage</td>
                <td>Fordor</td>
                <td>Miad ron me</td>
                <td>Diablo core</td>
                <td>Tidbade</td>
            </tr>
            <tr>
                <td>Hicura</td>
                <td>Warecom</td>
                <td>Xamicon</td>
                <td>Yamama</td>
                <td>Udoricano</td>
            </tr>
            <tr>
                <td>Lavistaro</td>
                <td>Micanorta</td>
                <td>Ebloconte ma</td>
                <td>Quad ri port</td>
                <td>Timesquer</td>
            </tr>
            </tbody>
        </table>
        <!--Формы-->
        <h2>Forms</h2>
        <form>
            <div class="row">
                <label>Text:</label>
                <input type="text" placeholder="Input type text">
            </div>
            <div class="row">
                <label>Select:</label>
                <select>
                    <option>Option</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <div class="row">
                <label><input type="checkbox">Sed ut perspiciatis unde omnis iste natus</label>
                <label><input type="radio" name="radiobutton" value="radiobutton">Lorem ipsum dolor sit amet, consectetur</label>
            </div>
            <div class="row">
                <label>Textarea:</label>
                <textarea></textarea>
            </div>
            <div class="row">
                <button type="submit">Button</button>
            </div>
        </form>
    </div>
</div>


<?php
if (isset($_SESSION['authorize']['id'] )){
    echo "Привет: " . $_SESSION['user'] . "<br>";
    echo "<a href=\"/account/out\"><button>Выход</button></a>";
}
else
{
    echo '<a href="/account/login"><button>Вход</button></a>';
}

?>

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