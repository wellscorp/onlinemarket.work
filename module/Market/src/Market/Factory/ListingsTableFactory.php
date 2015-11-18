<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 22/10/2015
 * Time: 09:37
 */

namespace Market\Factory;


use Market\Model\ListingsTable;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ListingsTableFactory implements FactoryInterface{

    public function createService(ServiceLocatorInterface $sm){

        return new ListingsTable(ListingsTable::$tableName, $sm->get('general-adapter'));
    }
} 