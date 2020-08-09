<?php

class controller
{ 
    //Load das views da pagina
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require 'views/' . $viewName . '.php';
    }

    // Load do template da pagina
    public function loadTemplate($viewName, $viewData = array())
    {
        require 'views/template.php';
    }

}