<?php
require_once("application/migration/create_table.php");
require_once("application/migration/drop_table.php");
?>

     <h2>Admin panel</h2>
        <form method="post">
            <div class="row">
                <label>Выбрать:</label>

                <select name="select">
                    <option value=" <?php echo $create_1;?> ">Create_table_doctor</option>
                    <option value=" <?php echo $drop_1;?> ">Drop_table_doctor</option>
                    <option value=" <?php echo $create_2;?> ">Create_table_person</option>
                    <option value=" <?php echo $drop_2;?> ">Drop_table_person</option>
                    <option value=" <?php echo $create_3;?> ">Create_table_user</option>
                    <option value=" <?php echo $drop_3;?> ">Drop_table_user</option>
                </select>
            </div>

                <p>Введите ваш SQL-запрос</p>
                <p><textarea type="text" style="width: 300px;" name="request" ></textarea></p>

                <b><button type="submit" name="EnterRequest">Отправить</button></b>
            </form>

<?php
use application\models\Main;
if(isset($_POST["request"])){
    $qwery = new Main();
    $qwery->qwery($_POST['request']);
    echo $_POST["request"];
    }


if(isset($_POST["select"])){
    $qwery = new Main();
    $qwery->qwery($_POST['select']);
    echo $_POST["select"];
}