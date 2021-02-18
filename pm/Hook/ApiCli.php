<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for processing remote API-CLI requests
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_ApiCli implements pm_Hook_Interface
{

    /**
     * Initialize command-line utility
     *
     */
    public function init() { }

    /**
     * Default route if not matched any command
     * Displays help message if not overridden
     *
     */
    public function defaultCommand() { }

    /**
     * Help command route
     * Displays automatically generated message
     *
     */
    public function helpCommand() { }

    /**
     * Return command-line arguments
     *
     * @return array
     */
    public function getArguments() { }

    /**
     * Retrieve the option value
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getOption($name, $default = null) { }

    /**
     * Return the name of the command that is called
     *
     * @return string
     */
    public function getCommandName() { }

    /**
     * Return the list of available commands
     *
     * @return array
     */
    public function getAvailableCommands() { }

    /**
     * Return the list of available options
     *
     * @param string $command
     * @return array
     */
    public function getAvailableOptions($command) { }

    /**
     * Print the message to stdout stream
     *
     * @param string $message
     */
    public function stdout($message) { }

    /**
     * Print the message to stderr stream
     *
     * @param string $message
     */
    public function stderr($message) { }

    /**
     * Exit the utility with provided exit code
     *
     * @param int $code
     */
    public function exitCode($code = 0) { }

}
