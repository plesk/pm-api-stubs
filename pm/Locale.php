<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Localization facilities
 *
 * @package Plesk_Modules
 */
class pm_Locale 
{

    /**
     * Return current locale code
     *
     * @return string
     */
    public static function getCode() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @return string
     */
    public static function lmsg($key) { }

    /**
     * Check if key exists in translations
     *
     * @param string $key
     * @return bool
     */
    public static function keyExists($key) { }

}
