<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Apache web server service interface
 * @since 18.0
 */
class pm_WebServer_Apache extends pm_WebServer_Abstract implements pm_WebServer_Interface
{

    /**
     * @var string Configuration directory of the web-server
     * @since 18.0.47
     */
    public const PARAMETER_CONF_DIR = 'confDir';

    /**
     * @var string Path to the PHP-CGI binary
     * @since 18.0.47
     */
    public const PARAMETER_PHP_CGI_BIN = 'phpCgiBin';

    /**
     * @var string Use the Require option in the configuration
     * @since 18.0.47
     */
    public const PARAMETER_USE_REQUIRE_OPTION = 'useRequireOption';

    public function __construct() { }

    public function isEnabled(): bool { }

    public function isRunning(): bool { }

    /**
     * @param string $name
     * @return string|null
     * @throws pm_Exception
     *
     * @since 18.0.47
     */
    public function getParameter(string $name): ?string { }

}
