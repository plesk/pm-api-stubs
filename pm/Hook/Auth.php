<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Custom authentication mechanism
 *
 * @package Plesk_Modules
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
     * Check if hook is enabled or not
     *
     * @return bool
     */
    public function isEnabled() { }

}
