<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for injection into apache config
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_ApacheWebConfig implements pm_Hook_Interface
{

    /**
     * Retrieve string which will be insert to <VirtualHost></VirtualHost> custom directive
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainConfig($domain) { }

}
