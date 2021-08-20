<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Web server service base implementation
 * @since 18.0
 */
abstract class pm_WebServer_Abstract implements pm_WebServer_Interface
{

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
