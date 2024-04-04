<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * IIS service interface
 * @since 18.0
 */
class pm_WebServer_IIS extends pm_WebServer_Abstract implements pm_WebServer_Interface
{

    public function __construct() { }

    public function isEnabled(): bool { }

    public function isRunning(): bool { }

    protected function getIisServiceData(): array { }

    /**
     * Get folder web.config file contents for specified folder
     *
     * @return mixed
     * @since 18.0.32
     */
    public function getWebConfig(pm_Domain $domain, string $relativePath) { }

    /**
     * Save given contents to web.config file in specified folder
     *
     * @return void
     * @since 18.0.32
     */
    public function setWebConfig(pm_Domain $domain, string $relativePath, string $configContent) { }

}
