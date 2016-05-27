<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
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
     * Set current locale code
     *
     * @param string $localeCode
     */
    public static function setCode($localeCode) { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public static function lmsg($key, $params = []) { }

    /**
     * Check if key exists in translations
     *
     * @param string $key
     * @param bool $findSection
     *
     * @return bool
     */
    public static function keyExists($key, $findSection = false) { }

    /**
     * Set translation from array
     *
     * @param string $localeCode
     * @param array $messages
     */
    public static function setTranslation($localeCode, $messages) { }

    /**
     * Get translated messages by key according to current locale
     *
     * @param string $sectionKey
     * @return string
     */
    public static function getSection($sectionKey) { }

}
