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

        return new ViewModel(array('category' => 'category postings'));
    }
} 