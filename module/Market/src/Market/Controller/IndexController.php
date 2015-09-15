<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 14/09/2015
 * Time: 22:02
 */

namespace Market\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController{

    public function indexAction(){

        return new ViewModel();
    }
} 