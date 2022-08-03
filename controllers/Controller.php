<?php
/**
 * Classe controladora principal.
 * @author Pierri Alexander Vidmar
 */
class Controller {
    
    /**
     * Carrega uma View.
     * @param String $viewName
     * @param array $viewData
     * @return void
     */
    public function loadView($viewName, $viewData = []) {
        extract($viewData);
        require_once 'views/' . $viewName . '.php';
    }

    /**
     * Método responsável por carregar o template HTML.
     * @param String $viewName
     * @param array $viewData
     * @return void
     */
    public function loadTemplate($viewName, $viewData = []){
        require_once 'views/template.php';
    }

    /**
     * Método responsável por carregar a view no template do HTML.
     * @param $viewName
     * @param $viewData
     * @return void
     */
    public function loadViewInTemplate($viewName, $viewData = []){
        extract($viewData);
        require_once 'views/' . $viewName . '.php';
    }
    
}
