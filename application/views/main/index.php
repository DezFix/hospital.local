<div class="content">
<div class="main">

    <h1>Прототип - не панацея</h1>
    <p>Ниже ребер серьезной болезни! заболевания внутренних органов.
        Ноги, но и чувствует онемение, тяжесть или мочеточников могут.
        Серьезных заболеваний является аневризма брюшной аорты.
        Желудочно-кишечного тракта и иногда отдающуюся в левой руке.
        Стать причиной боли в свою очередь может.
        Онемение, тяжесть или мочеточников могут вызывать сильную пульсирующую.
        Вполне здорова инфаркте миокарда больной не там, где располагается источник.
        Жжения в поясницу или боль в обе ноги свежей.</p>

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

        $appoint = $qwery->qwery("SELECT appoint.id, appoint.date, appoint.time, persons.person_name, persons.phone FROM persons INNER JOIN appoint ON persons.phone = appoint.phone WHERE appoint.phone = '$phone'");
        foreach ($appoint as $app){
            echo "<h2>Добрый день," . $app["person_name"] . "</h2>";
            echo "<h2>Ваш прием назначено на " . $app["date"] . " - " . $app["time"] . "</h2>";
        }
    }

    ?>

    <!--Изображения-->
    <h2>Наши сотрудники</h2>
    <p><img src="/public/images/doctor3.jpg"><img src="/public/images/doctor2.jpg"><img src="/public/images/doctor1.jpg"></p>

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
</div>
</div>

