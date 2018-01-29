<?php

/**
 *
 *  * This is an iumio Framework component
 *  *
 *  * (c) RAFINA DANY <dany.rafina@iumio.com>
 *  *
 *  * iumio Framework - iumio Components
 *  *
 *  * To get more information about licence, please check the licence file
 *
 */

namespace iumioFramework\Units;


use iumioFramework\Core\Base\Debug\Debug;

class DebugUnits extends FrameworkUnits
{
    
    public function execute()
    {
        Debug::output("hello", "screen");
        //exit();
        // TODO: Implement execute() method.
    }
}