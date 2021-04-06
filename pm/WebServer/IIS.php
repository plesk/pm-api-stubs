<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * IIS service interface
 * @since 18.0
 */
class pm_WebServer_IIS extends pm_WebServer_Abstract implements pm_WebServer_Interface
{

    
    public function __construct() { }

    
    public function isEnabled() { }

    
    public function isRunning() { }

    
    protected function getIisServiceData() { }

    /**
     * Get folder web.config file contents for specified folder
     *
     * @since 18.0.32
     */
    public function getWebConfig(pm_Domain $domain, string $relativePath) { }

    /**
     * Save given contents to web.config file in specified folder
     *
     * @since 18.0.32
     */
    public function setWebConfig(pm_Domain $domain, string $relativePath, string $configContent) { }

}
