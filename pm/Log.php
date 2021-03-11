<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Class pm_Log
 * Intended to log various data.
 *
 * @package Plesk_Modules
 * @since 12.5
 * @deprecated use pm_Bootstrap::getContainer()->get(Psr\Log\LoggerInterface::class)
 */
class pm_Log
{

    /**
     * Error: error conditions
     *
     * @param string|Exception $message
     */
    public static function err($message) { }

    /**
     * Warning: warning conditions
     *
     * @param string|Exception $message
     */
    public static function warn($message) { }

    /**
     * Informational: informational messages
     *
     * @param string|Exception $message
     */
    public static function info($message) { }

    /**
     * Debug: debug messages
     *
     * Example: "Task ID is $taskId"
     *
     * @static
     * @param string|Exception $message
     */
    public static function debug($message) { }

    /**
     * Debug: debug messages with backtrace
     *
     * @param string $message
     */
    public static function backtrace($message) { }

    /**
     * Debug: debug messages with var_dump
     *
     * @param mixed $var
     * @param string $message
     */
    public static function vardump($var, $message = '') { }

    /**
     * @static
     * @param int $priority
     * @param string|Exception $message
     */
    public static function log($priority, $message) { }

    /**
     * @return string
     */
    public static function getLogName() { }

}
