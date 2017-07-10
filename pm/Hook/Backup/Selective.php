<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Hook for selective backup
 *
 * @package Plesk_Modules
 * @since 17.8
 */
interface pm_Hook_Backup_Selective extends pm_Hook_Backup
{

    /**
     * Returns a backup marker which may be used for filtering of backups.
     *
     * For example, the marker may contain a site name if an extension is going to backup data related to this
     * site or a site name and a web-application instance name if an extension is going to backup data related
     * to the web-application instance working on the site.
     *
     * Examples:
     * - 'site1-instance1'
     * - 'site1-instance2'
     * - 'site2-instance1'
     * - 'site2-instance2'
     *
     * It is enough to have markers unique inside of an extension to not intersect with backups of other extensions.
     *
     * @param string $context Identifier of a backup session
     * @return string
     */
    abstract public function getMarker($context);

    /**
     * Returns a backup description that is shown in GUI.
     *
     * @param string $context Identifier of a backup session
     * @return string
     */
    abstract public function getDescription($context);

    /**
     * Returns databases and tables which shall be backed up.
     *
     * ```php
     * ['Database ID' => ['table 1', ...], ...]
     * ```
     *
     * - 'Database ID' - internal panel`s identifier of a database that can be get e.g. via API RPC.
     * - If tables list is empty entire database shall be backed up.
     * - Selective backup of tables of Microsoft SQL Server databases is not supported.
     *
     * Examples:
     * ```php
     *   []                    // back up nothing
     *   [1 => []]             // back up the entire database #1
     *   [5 => ['tb1', 'tb2']] // back up the tables 'tb1' and 'tb2' of the database #5
     * ```
     *
     * @param string $context Identifier of a backup session
     * @return array
     */
    abstract public function getDatabasesForBackup($context);

    /**
     * Returns path prefixes of files and directories which shall be backed up.
     *
     * ```php
     * ['path prefix 1', 'path prefix 2', ...]
     * ```
     *
     * Examples:
     * ```php
     *   [''] // back up entire content of a webspace
     *   []   // back up nothing
     *   ['httpdocs/word-press']  // back up everything starting with 'httpdocs/word-press', e.g.
     *                            // 'httpdocs/word-press.html', 'httpdocs/word-press/index.php' ...
     *   ['httpdocs/word-press/'] // back up content of the directory 'httpdocs/word-press' only
     *   ['httpdocs/word-press/wp-config.php'] // back up the file 'httpdocs/word-press/wp-config.php'
     * ```
     *
     * @param string $context Identifier of a backup session
     * @return array
     */
    abstract public function getFilesForBackup($context);

    /**
     * Returns an extension config.
     *
     * Additional data which shall be backed up.
     *
     * @param string $context Identifier of a backup session
     * @return string
     */
    abstract public function getConfigForBackup($context);

}
