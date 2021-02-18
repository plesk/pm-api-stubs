<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Domain wrapper
 *
 * @package Plesk_Modules
 * @since 11.5
 */
class pm_Domain
{

    /**
     * Create new domain wrapper
     *
     * @param int $domainId
     * @throws pm_Exception
     */
    public function __construct($domainId) { }

    /**
     * Retrieve domain by known id
     *
     * @param int $domainId
     * @return pm_Domain
     * @throws pm_Exception
     * @since 17.0
     */
    public static function getByDomainId($domainId) { }

    /**
     * Retrieve domain by GUID
     *
     * @param string $domainGuid
     * @return pm_Domain
     * @throws pm_Exception
     * @since 17.0
     */
    public static function getByGuid($domainGuid) { }

    /**
     * Retrieve domain by display name
     *
     * @param string $domainName
     * @return pm_Domain
     * @throws pm_Exception
     * @since 17.0
     */
    public static function getByName($domainName) { }

    /**
     * Retrieve all domains
     *
     * @param bool $mainDomainsOnly [optional] Return only main domains. Default is false.
     * @return pm_Domain[]
     * @since 17.0
     */
    public static function getAllDomains($mainDomainsOnly = false) { }

    /**
     * Retrieve all client domains
     *
     * @param pm_Client $client Domains owner
     * @param bool $mainDomainsOnly [optional] Return only main domains. Default is false.
     * @return pm_Domain[]
     * @since 17.0
     */
    public static function getDomainsByClient(pm_Client $client, $mainDomainsOnly = false) { }

    /**
     * Retrieve domain id
     *
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve domain GUID
     *
     * @return string
     * @since 17.0
     */
    public function getGuid() { }

    /**
     * Retrieve domain name in ASCII format
     *
     * @return string
     */
    public function getName() { }

    /**
     * Retrieve domain name to be displayed in UI
     *
     * @return string
     * @since 17.0
     */
    public function getDisplayName() { }

    /**
     * Retrieve domain IP addresses
     *
     * @param bool $public Return public IP addresses. For Plesk servers behind NAT private IP addresses are matched to corresponding public ones. Default is true.
     * @return string[]
     * @since 17.0
     */
    public function getIpAddresses($public = true) { }

    /**
     * Check if domain is active
     *
     * @return bool
     * @since 17.0
     */
    public function isActive() { }

    /**
     * Check if domain is suspended
     *
     * @return bool
     * @since 17.0
     */
    public function isSuspended() { }

    /**
     * Check if domain is disabled
     *
     * @return bool
     * @since 17.0
     */
    public function isDisabled() { }

    /**
     * Retrieve owner of domain
     *
     * @return pm_Client
     * @since 12.0
     */
    public function getClient() { }

    /**
     * Retrieve property of domain
     *
     * @param string $name
     * @return string
     * @throws pm_Exception
     */
    public function getProperty($name) { }

    /**
     * Return value of custom domain setting by given name
     *
     * @param string $name Setting name
     * @param string $default Default value of setting
     * @return string|null
     * @since 17.0
     */
    public function getSetting($name, $default = null) { }

    /**
     * Define value of custom domain setting
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     * @since 17.0
     */
    public function setSetting($name, $value) { }

    /**
     * Delete all custom domain settings
     *
     * @param string $prefix Settings name prefix
     * @since 17.0
     */
    public function deleteSettings($prefix = '') { }

    /**
     * Retrieve permission value by name
     *
     * @param string $name Permission name
     * @return mixed
     * @since 17.0
     */
    public function hasPermission($name) { }

    /**
     * Retrieve Plesk core permission value by name
     *
     * @param string $name Permission name
     * @return mixed
     * @since 17.0
     */
    public function hasCorePermission($name) { }

    /**
     * Retrieve limit value by name
     *
     * @param string $name Limit name
     * @return mixed
     * @since 17.0
     */
    public function getLimit($name) { }

    /**
     * Retrieve Plesk core limit value by name
     *
     * @param string $name Limit name
     * @return mixed
     * @since 17.0
     */
    public function getCoreLimit($name) { }

    /**
     * Check if domain has physical hosting configured
     *
     * @return bool
     * @since 17.0
     */
    public function hasHosting() { }

    /**
     * Check if domain has forwarding hosting configured
     *
     * @return bool
     * @since 18.0.26
     */
    public function hasForwarding() { }

    /**
     * Retrieve domain home path
     *
     * @return string
     * @since 17.0
     */
    public function getHomePath() { }

    /**
     * Retrieve domain system user login
     *
     * @return string
     * @since 17.0
     */
    public function getSysUserLogin() { }

    /**
     * Retrieve domain document root directory. Available for domains with web hosting
     *
     * @param bool $relative [optional] Return root directory relative to home path. Default is false.
     * @return string
     * @throws pm_Exception
     * @since 17.0
     */
    public function getDocumentRoot($relative = false) { }

    /**
     * Retrieve domain vhost system directory. Available for domains with web hosting
     *
     * @return string
     * @throws pm_Exception
     * @since 17.0
     */
    public function getVhostSystemPath() { }

    /**
     * Get included plan items
     *
     * @return string[]
     * @since 17.0
     */
    public function getPlanItems() { }

    /**
     * Get URL to screenshot of specified path on domain
     *
     * Available screenshot options:
     * ```php
     * [
     *     'type' => string, // Image type, can be either png or jpeg. Default: 'png'.
     *     'width' => int, // Browser window width, between 16-2048. Default: 1600.
     *     'height' => int, // Browser window height, between 16-2048. Default: 1200.
     *     'scale' => float, // Browser scale factor, between 0.01-1. Default: 1.
     *     'delay' => int, // Time in seconds, to delay the rendering of the snapshot, between 0-45. Default: 0.
     *     'cache' => int, // Time in seconds, after which the screenshot is considered obsolete and will be generated again. Default: 3600.
     * ]
     * ```
     *
     * @param string $path
     * @param array $options
     * @return string
     * @since 18.0
     */
    public function getScreenshotUrl(string $path = '/', array $options = []) { }

    /**
     * Check if domain has SSL support for web hosting
     *
     * @return bool
     * @throws pm_Exception
     * @since 18.0.24
     */
    public function hasSsl() { }

    /**
     * Check if domain has redirect from HTTP to HTTPS
     *
     * @return bool
     * @throws pm_Exception
     * @since 18.0.24
     */
    public function hasSslRedirect() { }

    /**
     * Check if domain is resolved to assigned IP
     *
     * @return bool
     * @since 18.0.32
     */
    public function isResolved() { }

    /**
     * Return DNS zone of domain
     *
     * @return pm_Dns_Zone
     *
     * @since 18.0.33
     */
    public function getDnsZone() { }

}
