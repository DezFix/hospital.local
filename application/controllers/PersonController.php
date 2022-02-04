<?php

namespace application\controllers;

use application\core\Controller;

class PersonController extends Controller
{

    public function indexAction()
    {

        $this->view->render('Пользователь');
    }


}