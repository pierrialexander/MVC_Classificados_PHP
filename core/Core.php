<?php

class Core
{
    /**
     * Inicia nossa aplicação.
     * Recebe a URL e encaminha para o controller responsável e sua action.
     */
    public function run()
    {
        $url = '/' . (isset($_GET['url']) ? $_GET['url'] : '');

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        echo 'Controller: ' . $currentController;
        echo '<br>';
        echo 'Action: ' . $currentAction;
    }
}
