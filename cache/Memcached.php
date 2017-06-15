<?php
/**
 * Created by PhpStorm.
 * User: favor1t
 * Date: 15.06.2017
 * Time: 22:50
 */

namespace app\favor1t\cache;


class Memcached extends Cache
{
    private static $_instance = null;

    private function __construct(){}

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new \Memcached();
            self::$_instance->addServers(parent::getConf("Memcached"));
        }

        return self::$_instance;
    }
}