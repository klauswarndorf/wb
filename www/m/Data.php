<?php
/**
 * @author Klaus Warndorf <klaus@warndorf.de>
 * @created 05.03.17 16:54
 */

namespace m;

class Data extends Object
{
    /** @var MySQL $mysql */
    private $mysql;

    /**
     * Data constructor.
     */
    public function __construct(MySQL $mysql)
    {
        parent::__construct();
        $this->mysql = $mysql;
    }

    public function getData()
    {
        return ['lol', 'Hallo Werner'];
    }
}