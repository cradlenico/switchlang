<?php

namespace App;

/**
 * Class lang
 *
 * @package \App
 */

class Lang
{
    /**
     * Select the default language by replacing the value in $default
     * 
     * @return mixed
     */

    public function expose()
    {
        $default = 'en';
        $webrowser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $file = 'app/i18n/' . $webrowser .'.json';

        if (!file_exists($file)) :
            return $json = $this->getfile('app/i18n/'.$default.'.json');
        else:
            return $json = $this->getfile($file);
        endif;
    }

    /**
     * Get the correct file
     * 
     * @param string $path get the path file
     * 
     * @return mixed
     */
    public function getfile($path)
    {
        return json_decode(file_get_contents($path, true));
    }
}
