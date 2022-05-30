<?php
//ession_start();
require_once('config.php');

/**
 * Autoload que carregará automaticamente as classes.
 */
spl_autoload_register(function($class) {
    if(file_exists('controllers/' . $class . '.php')) {
        require_once('controllers/' . $class . '.php');
    } 
    else if (file_exists('models/' . $class . '.php')) {
        require_once('models/' . $class . '.php');
    }
    else if (file_exists('core/' . $class . '.php')){
        require_once('core/' . $class . '.php');
    }
});

$core = new Core();
$core->run();