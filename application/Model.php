<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Model.php
 * -------------------------------------
 */


class Model
{
    private $_registry;
    protected $_db;
    
    public function __construct() {
        $this->_registry = Registry::getInstancia();
        $this->_db = $this->_registry->_db;
    }
}

?>
