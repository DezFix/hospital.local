<?php
use application\models\Users;
error_reporting(0);
$user = new Users();
$user->out(); //если передана переменная action, «разавторизируем» пользователя
