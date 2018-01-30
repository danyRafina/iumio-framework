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

namespace iumioFramework\Core\Requirement\Relexion;
use iumioFramework\Core\Requirement\Environment\FEnv;

/**
 * Class FrameworkReflexion
 * @package iumioFramework\Core\Requirement\Relexion
 * @category Framework
 * @licence  MIT License
 * @link https://framework.iumio.com
 * @author   RAFINA Dany <dany.rafina@iumio.com>
 */

class FrameworkReflexion
{

    /**
     * Pass method arguments by name
     * @param string $class Class name
     * @param string $method $method
     * @param array $args Method parameters
     * @return mixed
     * @throws \Exception
     */

    public function __named(string $class, string $method, array $args = array())
    {
        // TO DELETE
        define("ACTIVITY_CALLED", array("class" => $class, "method" => $method));
        FEnv::set("app.activity_called", array("class" => $class, "method" => $method));
        try {
            $reflection = new \ReflectionMethod($class, $method);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
        $pass = array();
        foreach ($reflection->getParameters() as $param) {
            $pass[] = $args[$param->getName()] ?? $param->getDefaultValue();
        }


        try {
            $rs = $reflection->invokeArgs(new $class(), $pass);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        return ($rs);
    }


    /** Create a simple instance
     * @param string $class Class Name
     * @param array $args Constructor parameters
     * @throws \Exception
     */
    public function __simple(string $class, array $args = array())
    {
        try {
            $class = new \ReflectionClass($class);
            if (empty($args)) {
                $class->newInstanceArgs();
            } else {
                $class->newInstanceArgs(array($args));
            }
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /** Create a simple instance
     * @param string $class Class Name
     * @param array $args Constructor parameters
     * @return mixed Return class instance
     * @throws \Exception
     */
    public function __simpleReturned(string $class, array $args = array())
    {
        try {
            $class = new \ReflectionClass($class);
            if (empty($args)) {
               return ($class->newInstanceArgs());
            } else {
                return ($class->newInstanceArgs(array($args)));
            }
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
}