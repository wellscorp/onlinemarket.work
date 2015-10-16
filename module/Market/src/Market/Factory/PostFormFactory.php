<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 18/09/2015
 * Time: 11:53
 */

namespace Market\Factory;


use Market\Form\PostForm;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostFormFactory implements FactoryInterface{

    public function createService(ServiceLocatorInterface $sm){

        $categories = $sm->get('categories');

        $form =  new PostForm();
        $form->setCategories($categories);
        $form->buildForm();

        return $form;
    }

} 