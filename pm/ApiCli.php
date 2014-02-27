<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Gateway for execution of CLI utilities
 *
 * @package Plesk_Modules
 */
class pm_ApiCli 
{

    const RESULT_FULL = 1;

    const RESULT_STDOUT = 2;

    const RESULT_STDERR = 3;

    const RESULT_CODE = 4;

    /**
     * Execute CLI utility (from set provided by panel)
     *
     * @param string $command
     * @param array $args
     * @param int $result
     * @return array|int|string
     * @throws pm_Exception
     */
    public static function call($command, $args = [], $result = 1) { }

    /**
     * Execute privileged CLI utility
     *
     * @param string $command
     * @param array $args
     * @param int $result
     * @param bool $contextPriority
     * @return array|int|string
     * @throws pm_Exception
     */
    public static function callSbin($command, $args = [], $result = 1, $contextPriority = true) { }

}
