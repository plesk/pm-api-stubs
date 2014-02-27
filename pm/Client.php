<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Panel client wrapper
 *
 * @package Plesk_Modules
 */
class pm_Client 
{

    /**
     * Retrieve client by known id
     *
     * @param int $clientId
     * @return pm_Client
     */
    public static function getByClientId($clientId) { }

    /**
     * Retrieve client by known login
     *
     * @param string $login
     * @return pm_Client
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
     */
    public function hasAccessToDomain($domainId) { }

}
