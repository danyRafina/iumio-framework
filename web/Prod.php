<?php

$loader = require __DIR__.'/../vendor/iumio_framework/php/Core/Requirement/iumoEngineAutoloader.php';
iumoEngineAutoloader::$env = "PROD";

use iumioFramework\Core\Base\{iumioEnvironment, Debug\Debug, Http\HttpListener};
use iumioFramework\Apps\AppCore;
use ManagerApp\ManagerApp as GManager;
use iumioFramework\Core\Additionnal\TaskBar\iumioTaskBar as TB;

/**
 * Class Prod
 * iumio Class for production environment
 * @author RAFINA Dany <danyrafina@gmail.com>
 */
class Prod extends iumioEnvironment
{

    /** Start Application
     * @return int Is Ready
     */
    static public function start():int
    {
        parent::definer('PROD');
        if (self::hostAllowed() == 1) {
            $core = new AppCore('PROD', true);
            Debug::enabled();
            GManager::off();
            TB::switchStatus("off");
            $request = HttpListener::createFromGlobals();
            $core->dispatch($request);
            return (1);
        }
        return (0);
    }
}
// Enable the application
Prod::start();

