<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Representation of panel session
 *
 * @package Plesk_Modules
 */
class pm_Session 
{

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
     * Retrieve id of client in which admin/reseller is impersonated into
     *
     * @return int
     */
    public static function getImpersonatedClientId() { }

    /**
     * Retrieve domain which context is current
     *
     * @return pm_Domain
     */
    public static function getCurrentDomain() { }

}
