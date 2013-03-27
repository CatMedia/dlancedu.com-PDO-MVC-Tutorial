<?php

class indexModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUsuarios()
    {
        $usuarios = $this->_db->query(
                "select u.*,r.role from usuarios u, roles r ".
                "where u.role = r.id_role"
                );
        return $usuarios->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getUsuario($usuarioID)
    {
         $usuarios = $this->_db->query(
                "select u.usuario,r.role from usuarios u, roles r ".
                "where u.role = r.id_role and u.id = $usuarioID"
                );
        return $usuarios->fetch();
    }
    
    public function getPermisosUsuario($usuarioID)
    {
        $acl = new ACL($usuarioID);
        return $acl->getPermisos();
    }
    
    public function getPermisosRole($usuarioID)
    {
        $acl = new ACL($usuarioID);
        return $acl->getPermisosRole();
    }
    
    public function eliminarPermiso($usuarioID, $permisoID)
    {
        $this->_db->query(
                "delete from permisos_usuario where ".
                "usuario = $usuarioID and permiso = $permisoID"
                );
    }
    
    public function editarPermiso($usuarioID, $permisoID, $valor)
    {
        $this->_db->query(
                "replace into permisos_usuario set ".
                "usuario = $usuarioID , permiso = $permisoID, valor ='$valor'"
                );
    }
}

?>
