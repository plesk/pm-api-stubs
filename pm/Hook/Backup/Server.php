<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for backing up and restoring the server configuration
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Hook_Backup_Server implements pm_Hook_Backup
{

    /**
     * Define the logic after backup server configuration
     */
    public function postBackup() { }

    /**
     * Define the content to be stored
     *
     * ```php
     * [
     *     string, // Serialized server configuration
     *     array,  // Array of relative paths inside extension's 'var' directory that will be include in backup
     *     array,  // Array of relative paths inside extension's 'var' directory that will be exclude from backup
     * ]
     * ```
     *
     * @return array
     */
    public function backup() { }

    /**
     * Define the logic on restoring the server configuration
     *
     * @param string $pleskVersion Version of Plesk when backup was created
     * @param string $extVersion Version of extension when backup was created
     * @param string $config Stored serialized configuration
     * @param string $contentDir Directory with stored content
     */
    public function restore($pleskVersion, $extVersion, $config, $contentDir) { }

    /**
     * Define the list of module settings that will not be stored in the backup
     *
     * @return string[]
     */
    public function getExcludedSettings() { }

}
