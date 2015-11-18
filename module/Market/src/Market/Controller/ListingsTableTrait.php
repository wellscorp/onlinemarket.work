<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 22/10/2015
 * Time: 09:42
 */

namespace Market\Controller;


trait ListingsTableTrait {

    private $listingsTable;

    public function setListingsTable($listingsTable){

        $this->listingsTable = $listingsTable;
    }

} 