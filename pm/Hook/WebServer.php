<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for injection into web servers config
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_WebServer implements pm_Hook_Interface
{

    /**
     * Retrieve string which will be insert to <VirtualHost></VirtualHost> custom directive
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainApacheConfig($domain) { }

    /**
     * Retrieve string which will be insert to server {...} custom directive
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainNginxConfig($domain) { }

    /**
     * Retrieve string which will be insert to server {...} custom directive
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainNginxProxyConfig($domain) { }

    /**
     * Retrieve xml as string which will be insert to Plesk IIS configurator
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainIisConfig($domain) { }

}
