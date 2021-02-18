<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for processing remote API-RPC requests
 *
 * @package Plesk_Modules
 * @since 17.0
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
