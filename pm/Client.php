<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Panel client wrapper
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Client
{

    /**
     * Retrieve client by known id
     *
     * @param int $clientId
     * @return pm_Client
     * @throws pm_Exception
     */
    public static function getByClientId($clientId) { }

    /**
     * Retrieve client by known login. Throws pm_Exception if client not found.
     *
     * @param string $login
     * @return pm_Client
     * @throws pm_Exception
     */
    public static function getByLogin($login) { }

    /**
     * Retrieve all clients
     *
     * @return pm_Client[]
     * @since 17.8.4
     */
    public static function getAll() { }

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
     * Retrieve login of client
     *
     * @return string
     * @since 17.0
     */
    public function getLogin() { }

    /**
     * Retrieve property of client
     *
     * @param string $name
     * @return string
     */
    public function getProperty($name) { }

    /**
     * Return value of custom client setting by given name
     *
     * @param string $name Setting name
     * @param string $default Default value of setting
     * @return string|null
     * @since 17.0
     */
    public function getSetting($name, $default = null) { }

    /**
     * Define value of custom client setting
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     * @since 17.0
     */
    public function setSetting($name, $value) { }

    /**
     * Delete all custom client settings
     *
     * @param string $prefix Settings name prefix
     * @since 17.0
     */
    public function deleteSettings($prefix = '') { }

    /**
     * Check if client can access to domain with provided identity
     *
     * @param int $domainId
     * @return bool
     * @since 12.0
     */
    public function hasAccessToDomain($domainId) { }

    /**
     * Check if user has permission
     *
     * @param string $name Permission name
     * @param pm_Domain|null $domain Domain to check permission (optional since 18.0)
     * @return bool
     * @since 17.0
     */
    public function hasPermission($name, pm_Domain $domain = null) { }

    /**
     * Check if user has core permission
     *
     * @param string $name Permission name
     * @param pm_Domain|null $domain Domain to check permission (optional since 18.0)
     * @return bool
     * @since 17.5
     */
    public function hasCorePermission($name, pm_Domain $domain = null) { }

    /**
     * Check if client can access to plan with provided identity
     *
     * @param int $planId
     * @return bool
     * @since 17.5
     */
    public function hasAccessToPlan($planId) { }

}
