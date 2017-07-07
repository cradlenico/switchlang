<?php

namespace App;

/**
 * Class Autoloader
 *
 * @package \App
 */
class Autoloader
{
    /**
     * save autoloader
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Includes the file corresponding to our class
     * @param $class string : name of the class to be loaded
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) :
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        endif;
    }
}
