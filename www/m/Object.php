<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 18:16
 */

namespace m;


class Object
{
    /** @var Config $config */
    protected $config;

    /** @var Layout $layout */
    protected $layout;

    /** @var Data $data */
    protected $data;

    /** @var params $params */
    protected $params;

    public function __construct(Config $config, Layout $layout, Params $params, Data $data)
    {
        $this->config = $config;
        $this->layout = $layout;
        $this->params = $params;
        $this->data = $data;
    }
}