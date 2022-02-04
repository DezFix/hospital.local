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