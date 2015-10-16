<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 18/09/2015
 * Time: 11:53
 */

namespace Market\Factory;


use Market\Form\PostFilter;
use Market\Form\PostForm;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostFilterFactory implements FactoryInterface{

    public function createService(ServiceLocatorInterface $sm){

        $filter = new PostFilter();
        $filter->setCategories($sm->get('categories'));
        $filter->buildFilter();
        return $filter;
    }

} 