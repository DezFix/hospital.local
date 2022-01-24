<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $result = $this->model->getPersons();
        $vars = [
            'persons' => $result,
        ];
        $this->view->render('Главная страница', $vars);
    }
    public function sqlAction()
    {
        $result = $this->model->getPersons();
        $vars = [
            'persons' => $result,
        ];
        $this->view->render('sql', $vars);
    }

}