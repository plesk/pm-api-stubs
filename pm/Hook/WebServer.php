<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Hook for injecting into web server configuration files
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_WebServer implements pm_Hook_Interface
{

    /**
     * Retrieve string which will be inserted into <VirtualHost></VirtualHost> directive in vhost config
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainApacheConfig($domain) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in vhost config
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainNginxConfig($domain) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in vhost config
     * in case nginx is working in proxy mode
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainNginxProxyConfig($domain) { }

    /**
     * Retrieve xml as string which will be inserted to Plesk IIS configurator
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainIisConfig($domain) { }

    /**
     * Retrieve string which will be inserted into <VirtualHost></VirtualHost> directive in webmail config
     *
     * @param pm_Domain $domain
     * @param string $type webmail type
     * @return string
     * @since 17.9
     */
    public function getWebmailApacheConfig($domain, $type) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in webmail config
     *
     * @param pm_Domain $domain
     * @param string $type webmail type
     * @return string
     * @since 17.9
     */
    public function getWebmailNginxConfig($domain, $type) { }

}
