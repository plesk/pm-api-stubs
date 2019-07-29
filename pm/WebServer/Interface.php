<?php
// Copyright 1999-2019. Plesk International GmbH. All rights reserved.
/**
 * Web server service interface
 * @since 18.0
 */
interface pm_WebServer_Interface
{

    /**
     * Check whether the server is installed
     *
     * @return bool
     */
    abstract public function isInstalled();

    /**
     * Check whether the server is enabled
     *
     * @return bool
     */
    abstract public function isEnabled();

    /**
     * Check whether the server is running
     *
     * @return bool
     */
    abstract public function isRunning();

}
