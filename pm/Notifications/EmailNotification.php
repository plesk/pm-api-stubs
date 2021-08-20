<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Email notification class
 *
 * @package Plesk_Modules
 * @since 18.0
 */
abstract class pm_Notifications_EmailNotification
{

    /**
     * Retrieve title of notification, which will be shown at settings page
     *
     * @return string
     */
    public function getTitle() { }

    /**
     * Retrieve notification message
     *
     * @return string
     */
    public function getMessage() { }

    /**
     * Retrieve notification subject
     *
     * @return string
     */
    public function getSubject() { }

    /**
     * Check that notification will send to admin by default
     *
     * @return bool
     */
    public function sendToAdmin() { }

    /**
     * Check that notification will send to reseller by default
     *
     * @return bool
     */
    public function sendToReseller() { }

    /**
     * Check that notification will send to customer by default
     *
     * @return bool
     */
    public function sendToCustomer() { }

}
