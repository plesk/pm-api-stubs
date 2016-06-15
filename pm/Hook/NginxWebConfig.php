<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for injection into nginx config
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_NginxWebConfig implements pm_Hook_Interface
{

    /**
     * Retrieve string which will be insert to server {...} custom directive
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainConfig($domain) { }

}
