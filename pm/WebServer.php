<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Web server manager
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_WebServer
{

    /**
     * Reconfigure domain web server configuration
     *
     * @param pm_Domain $domain
     * @throws Db_Table_Exception
     * @throws PleskDBException
     */
    public function updateDomainConfiguration(pm_Domain $domain) { }

    /**
     * Return Nginx web server wrapper
     *
     * @return pm_WebServer_Interface
     * @since 18.0
     */
    public function nginx() { }

    /**
     * Return Apache web server wrapper
     *
     * @return pm_WebServer_Interface
     * @since 18.0
     */
    public function apache() { }

    /**
     * Return IIS web server wrapper
     *
     * @return pm_WebServer_Interface
     * @since 18.0
     */
    public function iis() { }

}
