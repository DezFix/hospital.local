<?php
use application\models\Users;

$user = new Users();
    $user->out(); //если передана переменная action, «разавторизируем» пользователя
