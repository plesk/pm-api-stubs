<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Wrapper for ActionLog.
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_ActionLog
{

    public const OLD_VALUE = 'old';

    public const NEW_VALUE = 'new';

    /**
     * @param string $actionId
     *
     * @param int|null $objectId ID of the object mentioned in the event. 0 if not applicable (singleton object like 'admin').
     *
     * @param string[] $oldValues
     * @example array('contact_name' => 'John Smith', 'email' => 'user@new.example.com', 'login_name' => 'user1')
     * @param string[] $newValues
     * @example array('contact_name' => 'John Smith', 'email' => 'user@old.example.com', 'login_name' => 'user1')
     * @return void
     *
     * @throws Exception
     */
    public static function submit($actionId, $objectId = null, $oldValues = [], $newValues = []) { }

}
