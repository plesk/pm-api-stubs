<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for registering services provided by extension
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_SystemServices implements pm_Hook_Interface
{

    /**
     * Retrieve the list of services
     *
     * @return pm_SystemService_Service[]
     */
    abstract public function getServices();

}
