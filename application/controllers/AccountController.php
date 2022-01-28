<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Users;
use application\lib\db;
class AccountController extends Controller {

	public function loginAction() {
		$this->view->render('Вход');
	}

	public function registerAction() {
		$this->view->render('Регистрация');
	}

    public function outAction() {
        $this->view->render('Выход');
    }

}