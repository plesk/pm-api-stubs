<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for backing up and restoring domains
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Hook_Backup_Domain implements pm_Hook_Backup
{

    /**
     * Define the logic after backing up a domain
     *
     * @param pm_Domain $domain The domain that is backuped
     */
    public function postBackup(pm_Domain $domain) { }

    /**
     * Define the content to be stored
     *
     * ```php
     * [
     *     string, // Serialized config related to this domain
     *     array,  // Array of relative paths inside extension's 'var' directory that will be include in backup
     *     array,  // Array of relative paths inside extension's 'var' directory that will be exclude from backup
     *     array,  // Array of relative paths inside webspace root is marked as 'mine' content by the extension .
     *                These paths will be completely overwritten during restore.
     *                If the extension is absent on the server, this paths will not be restored.
     * ]
     * ```
     *
     * @param pm_Domain $domain The domain that is backuped
     *
     * @return array
     */
    public function backup(pm_Domain $domain) { }

    /**
     * Define logic on restore domain
     *
     * @param pm_Domain $domain The domain that is restored
     * @param string $pleskVersion Version of Plesk when backup was created
     * @param string $extVersion Version of extension when backup was created
     * @param string $config Stored config related to restoring domain
     * @param string $contentDir Directory with content related to restoring domain
     */
    public function restore(pm_Domain $domain, $pleskVersion, $extVersion, $config, $contentDir) { }

}
