<?php

namespace application\controllers;

use application\core\Controller;

class DoctorController extends Controller
{

    public function indexAction()
    {
        $this->view->render('Доктор');
    }

    public function cardsAction()
    {
        $this->view->render('Доктор');
    }

    public function appointAction()
    {
        $this->view->render('Доктор');
    }



}