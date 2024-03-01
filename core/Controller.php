<?php
class Controller{

    public function __construct(){
        global $config;
    }
    
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        include 'view/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()){
        extract($viewData);
        include 'template/template.php';
    }
            
}
?>