<?php

namespace Book\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BookController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel(
            array(
                'books' => []
            ));
    }

    public function editAction(){

    }

    public function addAction(){

    }

    public function deleteAction(){

    }
}