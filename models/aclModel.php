<?php

class aclModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getRole($roleID)
    {
        $roleID = (int) $roleID;
        
        $role = $this->_db->query("SELECT * FROM roles WHERE id_role = {$roleID}");
        return $role->fetch();
    }
    
    public function getRoles()
    {
        $roles = $this->_db->query("SELECT * FROM roles");
        
        return $roles->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getPermisosRole($roleID)
    {
        $data = array();
        
        $permisos = $this->_db->query(
                "SELECT * FROM permisos_role WHERE role = {$roleID}"
                );
                
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        
        for($i = 0; $i < count($permisos); $i++){
            $key = $this->getPermisoKey($permisos[$i]['permiso']);
            
            if($key == ''){continue;}
            if($permisos[$i]['valor'] == 1){
                $v = true;
            }
            else{
                $v = false;
            }
            
            $data[$key] = array(
                'key' => $key,
                'valor' => $v,
                'nombre' => $this->getPermisoNombre($permisos[$i]['permiso']),
                'id' => $permisos[$i]['permiso']
            );
        }
        
        $todos = $this->getPermisosAll();
        $data = array_merge($todos, $data);
        
        return $data;
    }
    
    public function getPermisoKey($permisoID)
    {
        $permisoID = (int) $permisoID;
        
        $key = $this->_db->query(
                "SELECT `key` FROM permisos WHERE id_permiso = $permisoID"
                );
        
        $key = $key->fetch();
        return $key['key'];
    }
    
    public function getPermisoNombre($permisoID)
    {
        $permisoID = (int) $permisoID;
        
        $key = $this->_db->query(
                "SELECT permiso FROM permisos WHERE id_permiso = $permisoID"
                );
        
        $key = $key->fetch();
        return $key['permiso'];
    }
    
    public function getPermisosAll()
    {
        $permisos = $this->_db->query(
                "SELECT * FROM permisos"
                );
                
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        
        for($i = 0; $i < count($permisos); $i++){
            $data[$permisos[$i]['key']] = array(
                'key' => $permisos[$i]['key'],
                'valor' => 'x',
                'nombre' => $permisos[$i]['permiso'],
                'id' => $permisos[$i]['id_permiso']
            );
        }
        
        return $data;
    }
    
    public function insertarRole($role)
    {
        $this->_db->query("INSERT INTO roles VALUES(null, '{$role}')");
    }
    
    public function getPermisos()
    {
        $permisos = $this->_db->query("SELECT * FROM permisos");
        
        return $permisos->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function eliminarPermisoRole($roleID, $permisoID)
    {
        $this->_db->query(
                "DELETE FROM permisos_role " . 
                "WHERE permiso = {$permisoID} " .
                "AND role = {$roleID}"
                );
    }

    public function editarPermisoRole($roleID, $permisoID, $valor)
    {
        $this->_db->query(
                "replace into permisos_role set role = {$roleID}, permiso = {$permisoID}, valor = '{$valor}'"
                );
    }

    public function insertarPermiso($permiso, $llave)
    {
        $this->_db->query(
                "INSERT INTO permisos VALUES" .
                "(null, '{$permiso}', '{$llave}')"
                );
    }
}

?>
