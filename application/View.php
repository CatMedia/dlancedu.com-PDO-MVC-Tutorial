<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * View.php
 * -------------------------------------
 */

require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty
{
    private $_request;
    private $_js;
    private $_acl;
    private $_rutas;
    private $_jsPlugin;
    
    public function __construct(Request $peticion, ACL $_acl) 
    {
        parent::__construct();
        $this->_request = $peticion;
        $this->_js = array();
        $this->_acl = $_acl;
        $this->_rutas = array();
        $this->_jsPlugin = array();
        
        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();
        
        if($modulo){
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo . '/views/' . $controlador . '/js/';
        }
        else{
            $this->_rutas['view'] = ROOT . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'views/' . $controlador . '/js/';
        }
    }
    
    public function renderizar($vista, $item = false, $noLayout = false)
    {
        $this->template_dir = ROOT . 'views' . DS . 'layout'. DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'template' . DS;
        
        $menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL,
                'imagen' => 'icon-home'
                ),
            
            array(
                'id' => 'post',
                'titulo' => 'Posts',
                'enlace' => BASE_URL . 'post',
                'imagen' => 'icon-flag'
                )
        );
        
        if(!Session::get('autenticado')){
            $menu[] = array(
                'id' => 'registro',
                'titulo' => 'Registro',
                'enlace' => BASE_URL . 'usuarios/registro',
                'imagen' => 'icon-book'
                );
        }
        
        $menuRight = array(
            array(
                'id' => 'usuarios',
                'titulo' => 'Usuarios',
                'enlace' => BASE_URL . 'usuarios',
                'imagen' => 'icon-user'
                ),
            
            array(
                'id' => 'acl',
                'titulo' => 'Listas de control de acceso',
                'enlace' => BASE_URL . 'acl',
                'imagen' => 'icon-list-alt'
                ),
            
            array(
                'id' => 'ajax',
                'titulo' => 'Ejemplo uso de AJAX',
                'enlace' => BASE_URL . 'ajax',
                'imagen' => 'icon-refresh'
                ),
            
            array(
                'id' => 'prueba',
                'titulo' => 'Prueba paginaci&oacute;n',
                'enlace' => BASE_URL . 'post/prueba',
                'imagen' => 'icon-random'
                ),
            
            array(
                'id' => 'pdf',
                'titulo' => 'Documento PDF 1',
                'enlace' => BASE_URL . 'pdf/pdf1/param1/param2',
                'imagen' => 'icon-file'
                ),
            
            array(
                'id' => 'pdf',
                'titulo' => 'Documento PDF 2',
                'enlace' => BASE_URL . 'pdf/pdf2/param1/param2',
                'imagen' => 'icon-file'
                )
        );
        
        $_params = array(
            'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu,
            'menu_right' => $menuRight,
            'item' => $item,
            'js' => $this->_js,
            'js_plugin' => $this->_jsPlugin,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
        );
                
        if(is_readable($this->_rutas['view'] . $vista . '.tpl')){
            if($noLayout){
                $this->template_dir = $this->_rutas['view'];
                $this->display($this->_rutas['view'] . $vista . '.tpl');
                exit;
            }
            
            $this->assign('_contenido', $this->_rutas['view'] . $vista . '.tpl');
        } 
        else {
            throw new Exception('Error de vista');
        }
        
        $this->assign('_acl', $this->_acl);
        $this->assign('_layoutParams', $_params);
        $this->display('template.tpl');
    }
    
    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = $this->_rutas['js'] . $js[$i] . '.js';
            }
        } 
        else {
            throw new Exception('Error de js');
        }
    }
    
    public function setJsPlugin(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_jsPlugin[] = BASE_URL . 'public/js/' .  $js[$i] . '.js';
            }
        } 
        else {
            throw new Exception('Error de js plugin');
        }
    }
}

?>
