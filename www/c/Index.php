<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 15:59
 */

namespace c;

use m\Config;
use m\Layout;
use m\Params;

class Index
{
    private $config;
    private $layout;

    public function __construct(Config $config, Layout $layout, Params $params)
    {
        $this->config = $config;
        $this->layout = $layout;
        $this->params = $params;
    }

    public function index()
    {

        echo "Hallo Werner";
    }
}