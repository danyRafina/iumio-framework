<?php

namespace AZApp\Master;

use iumioFramework\Masters\iumioUltimaMaster as Master;

/**
 * Class DefaultMaster
 * @package AZApp\Master
 */

class DefaultMaster extends Master
{

    /**
     * DefaultMaster constructor.
     */
    public function __construct()
    {
        $this->mastering($this);
    }

    /**
     * Go to index page
     * @param string $hi Element to show
     */
    public function indexActivity(string $hi)
    {
        return ($this->render("index2", array("sent" => $hi)));
    }

    /** show hello
     */
    public function show_indexActivity()
    {
        return ($this->render("index"));
    }
}