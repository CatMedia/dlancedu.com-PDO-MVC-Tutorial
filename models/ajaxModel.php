<?php

class ajaxModel extends Model
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function getPaises()
    {
        $paises = $this->_db->query(
                "select * from paises"
                );
        return $paises->fetchAll();
    }
    
    public function getCiudades($pais)
    {
        $ciudades = $this->_db->query(
                "select * from ciudades where pais={$pais}"
                );
                
        
        $ciudades->setFetchMode(PDO::FETCH_ASSOC);
        return $ciudades->fetchAll();
    }
    
    public function insertarCiudad($ciudad, $pais)
    {
        $this->_db->query(
                "insert into ciudades values(null, '{$ciudad}','{$pais}')"
                );
    }
}

?>
