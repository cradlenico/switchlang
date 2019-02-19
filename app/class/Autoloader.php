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
     * Class to save autoloader
     * 
     * @return autoload function
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Includes the file corresponding to our class
     * 
     * @param string $class string : name of the class to be loaded
     * 
     * @return file
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) :
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            include __DIR__ . '/' . $class . '.php';
        endif;
    }
}
