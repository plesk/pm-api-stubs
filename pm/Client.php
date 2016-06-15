<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Panel client wrapper
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Client 
{

    /**
     * Create new panel client wrapper
     *
     * @param int $clientId
     * @throws pm_Exception
     */
    public function __construct($clientId) { }

    /**
     * Retrieve client by known id
     *
     * @param int $clientId
     * @return pm_Client
     * @throws pm_Exception
     */
    public static function getByClientId($clientId) { }

    /**
     * Retrieve client by known login
     *
     * @param string $login
     * @return pm_Client
     * @throws pm_Exception
     */
    public static function getByLogin($login) { }

    /**
     * Check if client is administrator
     *
     * @return bool
     */
    public function isAdmin() { }

    /**
     * Check if client is reseller
     *
     * @return bool
     */
    public function isReseller() { }

    /**
     * Check if client is simple client/customer
     *
     * @return bool
     */
    public function isClient() { }

    /**
     * Retrieve client id
     *
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve property of client
     *
     * @param string $name
     * @return string
     */
    public function getProperty($name) { }

    /**
     * Check if client can access to domain with provided identity
     *
     * @param int $domainId
     * @return bool
     * @since 12.0
     */
    public function hasAccessToDomain($domainId) { }

    /**
     * Check if user has permission for domain
     *
     * @param string $name Permission name
     * @param pm_Domain $domain Domain to check permission
     * @return bool
     * @since 17.0
     */
    public function hasPermission($name, $domain) { }

}
