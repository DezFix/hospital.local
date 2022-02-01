<?php

namespace application\models;

use application\core\Model;
use application\lib\db;

class Users extends Model
{


    //register
    public function register($login, $password)
    {
        $result = $this->db->query("insert into users (login,password)values('$login','$password')");
        return $result;
    }

    //login
    function login($user, $password)
    {

        $users = 'admin';
        $pass = '21232f297a57a5a743894a0e4a801fc3';
        if ($_POST['submit']) {
            if ($users == $user and $pass == md5($password)) {
                session_start();
                $_SESSION['admin'] = $users;
                header("Location: /account/login");
                exit;
            } else echo '<p>Логин или пароль неверны!</p>';
        }
    }

    //out
    function out()
    {
        unset($_SESSION['admin']);
        session_destroy();
        header("Location: /account/login");
    }
}

