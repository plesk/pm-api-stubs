<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Custom authentication mechanism
 *
 * @package Plesk_Modules
 * @since 12.0
 */
abstract class pm_Hook_Auth implements pm_Hook_Interface
{

    /**
     * Check if credentials are valid or not
     *
     * @param string $login
     * @param string $password
     * @return bool
     */
    abstract public function auth($login, $password);

    /**
     * Handle session destroy event
     */
    public function destroy() { }

    /**
     * Check if hook is enabled or not
     *
     * @return bool
     */
    public function isEnabled() { }

    /**
     * If is true, then if the authentication fails, the next hook in the chain, if one exists, will not be executed.
     *
     * @return bool
     */
    public function breakChainOnFailure() { }

}
