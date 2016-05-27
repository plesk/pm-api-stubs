<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for processing remote API-RPC requests
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_ApiRpc implements pm_Hook_Interface
{

    /**
     * Execute API-RPC request to extension
     * @param array $params
     * @return array
     * @throws pm_Exception
     */
    abstract public function call($params);

}
