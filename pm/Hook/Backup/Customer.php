<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Class pm_Hook_Backup_Customer
 * @todo add description
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Backup_Customer implements pm_Hook_Backup, pm_Hook_Interface
{

    
    public function postBackup($id, $uuid, $name) { }

    
    public function backup($id, $uuid, $name) { }

    
    public function postRestore($id, $uuid, $name) { }

    
    public function restore($id, $uuid, $name, $idMapping, $pleskVersion, $extVersion, $config, $contentDir) { }

}
