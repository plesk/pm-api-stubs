<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Status messages helper
 *
 * @package Plesk_Modules
 */
class pm_View_Status 
{

    const STATUS_INFO = 'info';

    const STATUS_WARNING = 'warning';

    const STATUS_ERROR = 'error';

    /**
     * Add info message
     *
     * @param string $message
     */
    public static function addInfo($message) { }

    /**
     * Add warning message
     *
     * @param string $message
     */
    public static function addWarning($message) { }

    /**
     * Add error message
     *
     * @param string $message
     */
    public static function addError($message) { }

    /**
     * Add message
     *
     * @param string $status
     * @param string $message
     */
    public static function addMessage($status, $message) { }

    /**
     * Check if particular status message is present
     *
     * @param string $message
     * @return bool
     */
    public static function hasMessage($message) { }

}
