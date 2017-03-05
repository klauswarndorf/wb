<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 16:03
 */

namespace m;


trait Config
{
    private $config;

    public function __construct()
    {
        $this->loadConfig();
    }

    public static function getInstance()
    {
        if (static::$inst === null) {
            static::$inst = new static();
        }
        return static::$inst;
    }

    public function getConfig($json = null)
    {
        if ($json != null) {
            return $this->getConfigFromJson($json);
        }
        return $this->config;
    }

    private function getConfigFromJson($json)
    {
        $data = json_encode($json);
        return $this->config[$data['name']];
    }

    private function loadConfig()
    {
        $this->config = parse_ini_file('../conf/config.ini');
        return $this->getConfig();
    }
}

