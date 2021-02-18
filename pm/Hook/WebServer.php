<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
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
    public function getDomainApacheConfig(pm_Domain $domain) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in vhost config
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainNginxConfig(pm_Domain $domain) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in vhost config
     * in case nginx is working in proxy mode
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainNginxProxyConfig(pm_Domain $domain) { }

    /**
     * Retrieve xml as string which will be inserted to Plesk IIS configurator
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainIisConfig(pm_Domain $domain) { }

    /**
     * Retrieve string which will be inserted into <VirtualHost></VirtualHost> directive in webmail config
     *
     * @param pm_Domain $domain
     * @param string $type webmail type
     * @return string
     * @since 18.0
     */
    public function getWebmailApacheConfig(pm_Domain $domain, string $type) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in webmail config
     *
     * @param pm_Domain $domain
     * @param string $type webmail type
     * @return string
     * @since 18.0
     */
    public function getWebmailNginxConfig(pm_Domain $domain, string $type) { }

    /**
     * Retrieve string which will be inserted into <VirtualHost></VirtualHost> directive in vhost config of the forwarding domain
     *
     * @param pm_Domain $domain
     * @return string
     * @since 18.0.26
     */
    public function getForwardingDomainApacheConfig(pm_Domain $domain) { }

    /**
     * Retrieve string which will be inserted into server {...} directive in vhost config of the forwarding domain
     *
     * @param pm_Domain $domain
     * @return string
     * @since 18.0.26
     */
    public function getForwardingDomainNginxConfig(pm_Domain $domain) { }

    /**
     * Retrieve xml as string which will be inserted to Plesk IIS configurator for the forwarding domain
     *
     * @param pm_Domain $domain
     * @return string
     * @since 18.0.26
     */
    public function getForwardingDomainIisConfig(pm_Domain $domain) { }

}
