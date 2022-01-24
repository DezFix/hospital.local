<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Users extends Model {
                                                    //register
    public function register ($login, $password){
       $result = $this->db->query("insert into public.users(login,password)values('$login','$password')");
        return $result;
    }
                                                            //login
    function login () {
        ini_set ("session.use_trans_sid", true);    session_start();    if (isset($_SESSION['id']))//если сесcия есть

        {
            if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) //если cookie есть, обновляется время их жизни и возвращается true
                      {
            setCookie("login", "", time() - 1, '/');

            setCookie("password","", time() - 1, '/');

            setcookie ("login", $_COOKIE['login'], time() + 50000, '/');

            setcookie ("password", $_COOKIE['password'], time() + 50000, '/');

            $id = $_SESSION['id'];
            lastAct($id);
            return true;

        }
        else //иначе добавляются cookie с логином и паролем, чтобы после перезапуска браузера сессия не слетала
        {
            //$rez = mysql_query("SELECT * FROM users WHERE id='{$_SESSION['id']}'"); //запрашивается строка с искомым id
            $rez = $this->db->query("SELECT * FROM users WHERE id='{$_SESSION['id']}'");
            if ($this->db->fetch($rez) == 1) //если получена одна строка
                          {
                $row = $this->db->fetch($rez); //она записывается в ассоциативный массив

            setcookie ("login", $row['login'], time()+50000, '/');

            setcookie ("password", md5($row['login'].$row['password']), time() + 50000, '/');

            $id = $_SESSION['id'];
            lastAct($id);
            return true;

        }
    else return false;
    }
}
else //если сессии нет, проверяется существование cookie. Если они существуют, проверяется их валидность по базе данных
{
    if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) //если куки существуют

    {
        $rez = $this->db->query("SELECT 1 FROM users WHERE login='{$_COOKIE['login']}'"); //запрашивается строка с искомым логином и паролем
        @$row = $this->db->fetch($rez);

        if(@$row($rez) == 1 && md5($row['login'].$row['password']) == $_COOKIE['password']) //если логин и пароль нашлись в базе данных

        {
            $_SESSION['id'] = $row['id']; //записываем в сесиию id
            $id = $_SESSION['id'];

            lastAct($id);
            return true;
        }
        else //если данные из cookie не подошли, эти куки удаляются
        {
            SetCookie("login", "", time() - 360000, '/');

            SetCookie("password", "", time() - 360000, '/');
            return false;

        }
    }
    else //если куки не существуют
    {
        return false;
    }
}
}
                                                   //enter
    public function enter ()
    {
        $error = array(); //массив для ошибок
        if ($_POST['login'] != "" && $_POST['password'] != "") //если поля заполнены

        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $rez = $this->db->query("SELECT 1 FROM users WHERE login='$login'"); //запрашивается строка из базы данных с логином, введённым пользователем
            if ($this->db->fetch($rez) == 1) //если нашлась одна строка, значит такой юзер существует в базе данных

            {
                $row = $this->db->fetch($rez);
                if (md5(md5($password).$row['salt']) == $row['password']) //сравнивается хэшированный пароль из базы данных с хэшированными паролем, введённым пользователем

                {
                    //пишутся логин и хэшированный пароль в cookie, также создаётся переменная сессии
                    setcookie ("login", $row['login'], time() + 50000);
                    setcookie ("password", md5($row['login'].$row['password']), time() + 50000);
                    $_SESSION['id'] = $row['id'];   //записываем в сессию id пользователя

                    $id = $_SESSION['id'];
                    lastAct($id);
                    return $error;
                }
                else //если пароли не совпали

                {
                    $error[] = "Неверный пароль";
                    return $error;
                }
            }
            else //если такого пользователя не найдено в базе данных

            {
                $error[] = "Неверный логин и пароль";
                return $error;
            }
        }

        else
        {
            $error[] = "Поля не должны быть пустыми!";
            return $error;
        }

    }
                                                              //admin
    function is_admin($id) {
        @$rez = $this->db->query("SELECT prava FROM users WHERE id='$id'");

        if ($this->db->fetch($rez) == 1)
        {
            $prava = $this->db->fetch($rez, 0);

            if ($prava == 1) return true;
            else return false;

        }
        else return false;
    }
                                                                 //out
    function out () {
        session_start();
        $id = $_SESSION['id'];

        $this->db->query("UPDATE users SET online=0 WHERE id='$id'"); //обнуляется поле online, говорящее, что пользователь вышел с сайта (пригодится в будущем)
        unset($_SESSION['id']); //удалятся переменная сессии
        SetCookie("login", ""); //удаляются cookie с логином

        SetCookie("password", ""); //удаляются cookie с паролем
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/'); //перенаправление на главную страницу сайта
        }
        }