<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Wrapper to simplify execution of API-RPC calls inside modules
 *
 * @package Plesk_Modules
 */
class pm_ApiRpc 
{

    /**
     * Get wrapper for API-RPC calls for desired protocol (latest by default)
     *
     * @param string $protocolVersion
     * @return pm_ApiRpc
     */
    public static function getService($protocolVersion = null) { }

    /**
     * Perform API-RPC call
     *
     * @param string|SimpleXMLElement|DOMDocument $request
     * @param string $login Panel username on behalf of which the operation will be performed
     * @return SimpleXMLElement
     */
    public function call($request, $login = null) { }

}
