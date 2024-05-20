<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Web server service base implementation
 * @since 18.0
 */
abstract class pm_WebServer_Abstract implements pm_WebServer_Interface
{

    /**
     * Check whether the server is installed
     *
     * @return bool
     */
    public function isInstalled(): bool { }

    /**
     * Check whether the server is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool { }

    /**
     * Check whether the server is running
     *
     * @return bool
     */
    public function isRunning(): bool { }

    /**
     * Get web server parameter
     *
     * @param string $name Parameter name (see constants)
     * @return string|null
     *
     * @throws \pm_Exception If requested parameter is not known
     *
     * @since 18.0.47
     */
    public function getParameter(string $name): ?string { }

}
