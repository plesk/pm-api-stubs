<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Web server service base implementation
 * @since 17.9
 */
abstract class pm_WebServer_Abstract implements pm_WebServer_Interface
{

    /**
     * @var Service_Capability_Web_Interface
     */
    protected $web;

    /**
     * Check whether the server is installed
     *
     * @return bool
     */
    public function isInstalled() { }

    /**
     * Check whether the server is enabled
     *
     * @return bool
     */
    public function isEnabled() { }

    /**
     * Check whether the server is running
     *
     * @return bool
     */
    public function isRunning() { }

}
