<?php

namespace Hello\Controller;

use Hello\Model\MyName;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $t=$this->params()->fromQuery('name');  // From GET

        $view = new ViewModel();
        $model = new MyName();
        $view->setVariable("message", $model->sayHi($t));
        return $view;

    }


}

