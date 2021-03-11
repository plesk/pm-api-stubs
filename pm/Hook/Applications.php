<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
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
     * @param pm_Domain $domain
     */
    public function scan(pm_Domain $domain) { }

    /**
     * Filter application to handle it by using a specific non-APS resources
     *
     * @param pm_Domain $domain
     * @param string $path
     * @return bool
     */
    public function isFiltered(pm_Domain $domain, $path) { }

}
