<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for processing remote API-CLI requests
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_ApiCli implements pm_Hook_Interface
{

    /**
    * Execute API-CLI request to extension
    * @param array $params
    * @return string
    * @throws pm_Exception
    */
    abstract public function call($params);

    /**
     * Get help message on API-CLI usage
     * @return string
     */
    abstract public function getHelpMessage();

}
