<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Hook for Notifications
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Notifications implements pm_Hook_Interface
{

    /**
     * Retrieve the list of notifications
     *
     * ```php
     * [
     *     'unique_notification_id' => [
     *          'title' => ''                   // notification's title which admin sees in UI
     *          'notifyAdmin' => true,          // by default notify admin
     *          'notifyResellers' => false,     // by default notify resellers
     *          'notifyClients' => false,       // by default notify clients
     *          'notifyCustomEmail' => false,   // by default send notification to a custom email
     *          'customEmail' => ''             // custom email address to notify
     *          'subject' => '',                // subject of email (placeholders allowed)
     *          'message' => ''                 // email's body (placeholders allowed)
     *      ]
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getNotifications();

}
