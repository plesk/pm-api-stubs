<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Status messages helper
 *
 * @package Plesk_Modules
 * @since 12.0
 */
class pm_View_Status
{

    const STATUS_INFO = 'info';

    const STATUS_WARNING = 'warning';

    const STATUS_ERROR = 'error';

    
    public function __construct() { }

    /**
     * Add info message
     *
     * @param string $message
     * @param bool $noEscape if true, HTML is allowed in message
     */
    public static function addInfo($message, $noEscape = false) { }

    /**
     * Add warning message
     *
     * @param string $message
     * @param bool $noEscape if true, HTML is allowed in message
     */
    public static function addWarning($message, $noEscape = false) { }

    /**
     * Add error message
     *
     * @param string $message
     * @param bool $noEscape if true, HTML is allowed in message
     */
    public static function addError($message, $noEscape = false) { }

    /**
     * Add message
     *
     * @param string $status
     * @param string $message
     * @param bool $noEscape if true, HTML is allowed in message
     */
    public static function addMessage($status, $message, $noEscape = false) { }

    /**
     * Check if particular status message is present
     *
     * @param string $message
     * @return bool
     */
    public static function hasMessage($message) { }

    /**
     * Get all status messages and delete them if required
     *
     * ```php
     * [
     *     [
     *         'status' => STATUS_INFO|STATUS_WARNING|STATUS_ERROR,
     *         'content' => string,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @param bool $clearMessages [optional] Default is true.
     * @return array
     * @since 17.0
     */
    public static function getAllMessages($clearMessages = true) { }

    /**
     * Check if status message with certain type is present
     *
     * @param string $type Status message type, one of STATUS_INFO|STATUS_WARNING|STATUS_ERROR
     * @return bool
     * @since 17.0
     */
    public static function hasMessagesByType($type) { }

}
