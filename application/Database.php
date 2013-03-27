<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Database.php
 * -------------------------------------
 */


class Database extends PDO
{
    public function __construct($host, $dbname, $user, $pass, $char) {
        parent::__construct(
                'mysql:host=' . $host .
                ';dbname=' . $dbname,
                $user, 
                $pass, 
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $char
                    ));
                
    }
}

?>
