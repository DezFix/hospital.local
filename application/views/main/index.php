<div class="content">
<div class="main">

    <h1>Прототип - не панацея</h1>
    <p>Господа, постоянный количественный рост и сфера нашей активности не оставляет шанса для первоочередных требований. Как принято считать, действия представителей оппозиции набирают популярность среди определенных слоев населения, а значит, должны быть своевременно верифицированы. Есть над чем задуматься: сторонники тоталитаризма в науке представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть указаны как претенденты на роль ключевых факторов.</p>

<form method="post">
    <h1>Проверьте записаны ли вы на прием!</h1>

    <sup><label>Введите номер телефона</label></sup>
    <input type="text" name="phone">
    <b><button type="submit">Отправить</button></b>
</form>

    <?php
    use application\models\Main;
    if (isset($_POST["phone"])){
        $qwery = new Main();
        $phone = $_POST["phone"];
        $app = $qwery->row("SELECT * FROM public.appoint WHERE phone = '$phone'");
        foreach ($app as $appoint){
            echo "<h2>Ваш прием назначено на " . $appoint["date"] . " - " . $appoint["time"] . "</h2>";
        }
    }

    ?>

    <!--Изображения-->
    <h2>Наши сотрудники</h2>
    <p><img src="/public/images/testdoctor3.jpg"><img src="/public/images/testdoctor2.jpg"><img src="/public/images/testdoctor1.jpg"></p>
</div>
</div>




        <!--Списки и определения-->
        <h2>Что вы можите ожидать от нас!</h2>
        <div class="row">
            <div class="col">
                <ul>
                    <li>Тест на ковид</li>
                    <li>Запись на прием!</li>
                    <li>Ведение вашей карты</li>
                    <li>Выздоровление</li>
                </ul>
            </div>
        </div>

        </form>
    </div>
</div>
