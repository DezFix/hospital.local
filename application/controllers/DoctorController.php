<?php

namespace application\controllers;

use application\core\Controller;

class DoctorController extends Controller
{

    public function indexAction()
    {

        $this->view->render('Доктор');
    }


}