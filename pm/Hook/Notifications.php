<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
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
     *     'unique_email_notification_id' => \pm_Notifications_EmailNotification,
     *     'unique_panel_notification_id' => \pm_Notifications_PanelNotification,
     *     ...
     * ]
     * ```
     *
     * @return array of \pm_Notifications_EmailNotification or \pm_Notifications_PanelNotification
     */
    abstract public function getNotifications();

}
