<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Notification manager
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Notification
{

    /**
     * Creates new instance of notification manager
     */
    public function __construct() { }

    /**
     * Sends a notification
     *
     * @param string $id                notification's id
     * @param array $params             mail params for email body and subject (placeholders: key => value).
     * @param pm_Client|null $client    client or reseller who gets a notification.
     * @return array                    list of recipients
     * @throws pm_Exception
     */
    public function send($id, array $params = [], pm_Client $client = null) { }

}
