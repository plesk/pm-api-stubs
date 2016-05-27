<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for injection into iis config
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_IisWebConfig implements pm_Hook_Interface
{

    /**
     * Retrieve xml as string which will be insert to plesk iis configurator
     *
     * @param pm_Domain $domain
     * @return string
     */
    public function getDomainConfig($domain) { }

}
