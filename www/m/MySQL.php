<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 16:02
 */

namespace m;

trait MySQL
{

    private $config;

    private $link;

    /**
     * MySQL constructor.
     */
    public function __construct()
    {
        $this->getConfig();
        $this->connect();
    }

    public function __destruct()
    {
        mysql_close($this->link);
    }

    private function connect()
    {
        $this->link = @mysql_connect(
            $this->config['mysql_host'],
            $this->config['mysql_user'],
            $this->config['mysql_pw']
        );
        mysql_select_db($this->config['mysql_db'], $this->link);
    }

    private function getConfig()
    {
        $this->config = Config::getInstance();
    }
}