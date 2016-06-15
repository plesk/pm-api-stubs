<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for applications
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Applications implements pm_Hook_Interface
{

    /**
     * Handle application scan event
     */
    public function scan($domain) { }

}
