<?php
// Copyright 1999-2022. Plesk International GmbH. All rights reserved.

namespace Plesk\SDK\Hook;

/**
 * @since 18.0.47
 */
abstract class Webmail implements HookInterface
{
    /**
     * Integrate a list of webmails into the UI and CLI.
     * Webmails must have a unique name within the module to be properly displayed.
     * The name provided by the Webmail will be passed to the following methods:
     * * @see \pm_Hook_WebServer::getWebmailApacheConfig()
     * * @see \pm_Hook_WebServer::getWebmailNginxConfig()
     *
     * @return \Plesk\SDK\Webmail[]
     */
    abstract public function getWebmails(): array;
}
