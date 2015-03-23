<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Plesk options / info
 *
 * @package Plesk_Modules
 */
class pm_ProductInfo 
{

    const PLATFORM_UNIX = 'Unix';

    const PLATFORM_WINDOWS = 'Windows';

    /**
     * Retrieve Plesk version
     *
     * @return string
     */
    public static function getVersion() { }

    /**
     * Retrieve platform name
     *
     * @return string
     */
    public static function getPlatform() { }

    /**
     * Check if platform is Unix
     *
     * @return bool
     */
    public static function isUnix() { }

    /**
     * Check if platform is Windows
     *
     * @return bool
     */
    public static function isWindows() { }

}
