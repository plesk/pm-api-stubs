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

}
