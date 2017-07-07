<?php

namespace App;

/**
 * Class lang
 *
 * @package \i18n
 */
class Lang
{
    public function expose()
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if ($lang != 'fr') :
            $content = file_get_contents("app/i18n/en.json", true);
        else :
            $content = file_get_contents("app/i18n/$lang.json", true);
        endif;
        return $json = json_decode($content);
    }

}