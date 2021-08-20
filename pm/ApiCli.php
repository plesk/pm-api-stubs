<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Gateway for execution of CLI utilities
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_ApiCli
{

    const RESULT_FULL = 1;

    const RESULT_STDOUT = 2;

    const RESULT_STDERR = 3;

    const RESULT_CODE = 4;

    const RESULT_EXCEPTION = 5;

    /**
     * Execute CLI utility (from set provided by panel)
     *
     * @param string $command
     * @param array $args
     * @param int $result
     * @param array $env
     * @return array|int|string
     * @throws pm_Exception
     * @since 11.0 from CLI only
     * @since 17.0 from anywhere. RESULT_EXCEPTION is default.
     */
    public static function call($command, $args = [], $result = 5, $env = []) { }

    /**
     * Execute privileged CLI utility
     *
     * @param string $command
     * @param array $args
     * @param int $result
     * @param array $env
     * @return array|int|string
     * @throws pm_Exception
     * @since 12.0 Unix only
     * @since 17.0 Windows support
     */
    public static function callSbin($command, $args = [], $result = 5, $env = []) { }

    /**
     * Execute specified command as domain user
     *
     * @param pm_Domain $domain
     * @param string $workingDir
     * @param string $command
     * @param array $args
     * @param int $result
     * @param array $env
     * @return array|int|string
     * @throws pm_Exception
     * @since 18.0.34
     */
    public static function callDomain(pm_Domain $domain, string $workingDir, string $command, array $args = [], int $result = 5, array $env = []) { }

}
