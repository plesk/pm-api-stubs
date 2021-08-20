<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Wrapper for ActionLog.
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_ActionLog
{

    const OLD_VALUE = 'old';

    const NEW_VALUE = 'new';

    /**
     * @param $actionId
     *
     * @param int $objectId ID of the object mentioned in the event. 0 if not applicable (singleton object like 'admin').
     *
     * @param array $oldValues
     * @example array('contact_name' => 'John Smith', 'email' => 'user@old.example.com', 'login_name' => 'user1')
     *
     * @param array $newValues
     * @example array('contact_name' => 'John Smith', 'email' => 'user@new.example.com', 'login_name' => 'user1')
     *
     * @throws Exception
     */
    public static function submit($actionId, $objectId = null, $oldValues = null, $newValues = null) { }

}
