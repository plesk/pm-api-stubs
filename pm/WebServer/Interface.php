<?php
// Copyright 1999-2025. WebPros International GmbH. All rights reserved.
/**
 * Web server service interface
 * @since 18.0
 */
interface pm_WebServer_Interface
{

    /**
     * Check whether the server is installed
     *
     * @return bool
     */
    public function isInstalled(): bool;

    /**
     * Check whether the server is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Check whether the server is running
     *
     * @return bool
     */
    public function isRunning(): bool;

    /**
     * Get web server parameter
     *
     * @param string $name Parameter name (see constants)
     * @return string|null
     */
    public function getParameter(string $name): ?string;

}
