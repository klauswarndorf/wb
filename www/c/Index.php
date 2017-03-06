<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 15:59
 */

namespace c;

use m\Object;

class Index extends Object
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo $this->layout;
    }
}