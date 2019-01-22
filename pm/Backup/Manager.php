<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Manager of backups for extension.
 *
 * @package Plesk_Modules
 * @since 17.8
 */
class pm_Backup_Manager
{

    /** @since 17.9 */
    const OBJECT_TYPE_SERVER = 'server';

    /** @since 17.9 */
    const OBJECT_TYPE_RESELLER = 'reseller';

    /** @since 17.9 */
    const OBJECT_TYPE_CLIENT = 'client';

    /** @since 17.9 */
    const OBJECT_TYPE_DOMAIN = 'domain';

    /**
     * Retrieve backup form URL
     *
     * @param int $domainId
     * @param string $context
     * @return string
     */
    public static function getBackupUrl($domainId, $context) { }

    /**
     * Retrieve backups list URL
     *
     * @param $domainId
     * @param $marker
     * @return string
     */
    public static function getListUrl($domainId, $marker) { }

    /**
     * Activate storage of extension
     *
     * Object type is the one of
     * - pm_Backup_Manager::OBJECT_TYPE_SERVER
     * - pm_Backup_Manager::OBJECT_TYPE_RESELLER
     * - pm_Backup_Manager::OBJECT_TYPE_CLIENT
     * - pm_Backup_Manager::OBJECT_TYPE_DOMAIN
     *
     * @param string $objectType
     * @param $objectId
     * @throws \pm_Exception
     * @since 17.9
     */
    public static function activateStorage($objectType, $objectId = null) { }

}
