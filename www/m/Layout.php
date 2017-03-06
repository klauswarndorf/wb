<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 17:01
 */

namespace m;


class Layout extends Object
{
    private $html;

    public function __construct()
    {
        parent::__construct();
        $this->do();
    }

    public function __toString()
    {
        return (string) $this->html;
    }

    private function do()
    {
        $this->html = $this->getLayout();
    }

    private function getLayout(Template $template)
    {
        return $template;
    }
}