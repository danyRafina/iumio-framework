<?php

namespace iumioFramework\Core\Requirement;

/**
 * Abstract Class iumioApp
 * @package iumioFramework\Core\Requirement
 * @author RAFINA Dany <danyrafina@gmail.com>
 */
abstract class iumioApp
{
    protected $id;
    protected $name;
    protected $namespace;
    protected $default;
    protected $status;

    /** Get app id
     * @return int app id
     */
    public function getId():int
    {
        return $this->id;
    }

    /** Set app id
     * @param int $id new app id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /** Return app name
     * @return string app name
     */
    public function getName():string
    {
        return $this->name;
    }

    /** Set app name
     * @param string $name new app name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /** Return app namespace
     * @return string app namespace
     */
    public function getNamespace():string
    {
        return $this->namespace;
    }

    /** Set app namespace
     * @param string $namespace new app namespace
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
    }

    /** Get if it's default app
     * @return bool app default status
     */
    public function getDefault():bool
    {
        return $this->default;
    }

    /** Set app default status
     * @param bool $default new app default status
     */
    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    /** Return app status
     * @return string app status
     */
    public function getStatus():string
    {
        return $this->status;
    }

    /** Set app status
     * @param $status app status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /** Save an App
     */
    abstract public function save();

    /** Delete an app
     */
    abstract public function remove();


}