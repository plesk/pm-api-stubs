<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Class pm_Hook_Backup_Server
 * @todo add description
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Backup_Server implements pm_Hook_Backup, pm_Hook_Interface
{

    
    public function postBackup() { }

    
    public function backup() { }

    
    public function postRestore() { }

    
    public function restore($idMapping, $pleskVersion, $extVersion, $config, $contentDir) { }

}
