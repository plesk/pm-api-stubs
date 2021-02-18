<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Localization facilities
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Locale
{

    const FALLBACK_LOCALE = 'en-US';

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
     * @since 11.5
     */
    public static function setCode($localeCode) { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     * @since 12.0 added argument $params
     */
    public static function lmsg($key, $params = []) { }

    /**
     * Check if key exists in translations
     *
     * @param string $key
     * @param bool $findSection
     *
     * @return bool
     * @since 17.0 added argument $findSection
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
     * @return array
     * @since 17.0
     */
    public static function getSection($sectionKey) { }

}
