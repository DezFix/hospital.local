<?php

namespace application\models;

use application\core\Model;
use application\lib\db;

class Users extends Model
{


    //register
    public function register($login, $password)
    {
        $config = require 'application/config/db.php';
        $pepper = $config['pepper'];

        $pwd_peppered = hash_hmac("sha256", $password, $pepper);
        $pwd_hashed = password_hash($pwd_peppered,  PASSWORD_DEFAULT);
        $result = $this->db->query("insert into users (login,password)values('$login','$pwd_hashed')");
        return $result;
        header("Location: /account/login");
    }

    //login
    function login($user, $password)
    {
        $config = require 'application/config/db.php';
        $pepper = $config['pepper'];
        $result = $this->db->row("SELECT * from users WHERE login = '$user'");

            if (!empty($result[0]["login"])){
                //$users = $result[0]["login"];
                $pass = $result[0]["password"];
                $acl = $result[0]["acl"];
                $pwd_peppered2 = hash_hmac("sha256", $password, $pepper);
            if (password_verify($pwd_peppered2, $pass)) {
               // session_start();
                if ($acl == "doctor") {
                    $_SESSION['authorize']['id'] = $result[0]["id"];
                    $_SESSION['user'] = $result[0]["login"];
                    header("Location: /doctor/cards");
                }
                elseif ($acl == "admin"){
                    $_SESSION['admin']['id'] = $result[0]["id"];
                    $_SESSION['user'] = $result[0]["login"];
                    header("Location: /sql");
                }

                exit;
            } else echo '<p>Логин или пароль неверны!</p>';
        }
            else {
                echo '<p>Нет такого логина!</p>';
            }
        }



    //out
    function out()
    {
        //unset($_SESSION['admin']);
        session_destroy();
        header("Location: /");
    }
}

