<?php
/**
 * Created by PhpStorm.
 * User: favor1t
 * Date: 15.06.2017
 * Time: 23:22
 */

namespace app\favor1t\cache;

use app\favor1t\helper\SingletonTrait as Sng;

class Cache
{
    use Sng;

    protected static function getConf($type)
    {
        if (file_exists($type . ".conf.php")) {
            return include(__DIR__.$type . ".conf.php");
        } else {
            throw new Exception(__CLASS__ . ': File does not find!');
        }

    }
}