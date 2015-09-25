<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 18/09/2015
 * Time: 11:39
 */

namespace Market\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ViewController extends AbstractActionController{

    public function indexAction()
    {
        // obtem da url os parametros
        $category = $this->params()->fromRoute("category");

        return new ViewModel(array('category' => $category));
    }

    public function itemAction()
    {
        $itemId = $this->params()->fromRoute("itemId");

        if(!$itemId){
            $this->flashMessenger()->addMessage('Item not found!');
            return $this->redirect()->toRoute('market');
        }

        return new ViewModel(array('itemId' => $itemId));
    }
} 