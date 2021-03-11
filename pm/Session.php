<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Representation of panel session
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Session
{

    /**
     * Check if session is initialized or not
     *
     * @return bool
     * @since 12.0
     */
    public static function isExist() { }

    /**
     * Retrieve panel client for current session
     *
     * @return pm_Client
     */
    public static function getClient() { }

    /**
     * Check if admin/reseller is impersonated into client in hosting panel
     *
     * @return bool
     */
    public static function isImpersonated() { }

    /**
     * Retrieve id of admin/reseller which impersonated into a client
     *
     * @return int
     */
    public static function getImpersonatedClientId() { }

    /**
     * Retrieve domain which context is current
     *
     * @return pm_Domain
     * @since 11.5
     * @deprecated use `getCurrentDomains` method
     */
    public static function getCurrentDomain() { }

    /**
     * Retrieve domains that are in current context of Power User view
     *
     * @param bool $mainDomainsOnly [optional] Return only main domains. Default is false.
     * @return pm_Domain[]
     * @since 17.0
     */
    public static function getCurrentDomains($mainDomainsOnly = false) { }

}
