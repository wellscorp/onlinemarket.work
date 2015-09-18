<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 18/09/2015
 * Time: 11:48
 */

namespace Market\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController{

    public $categories;

    public function setCategories($categories){
        $this->categories = $categories;
    }

    public function indexAction()
    {
        return new ViewModel(array('categories' => $this->categories));
    }
} 