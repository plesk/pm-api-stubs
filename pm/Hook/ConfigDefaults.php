<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for extension config defaults (panel.ini settings)
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_ConfigDefaults implements pm_Hook_Interface
{

    /**
     * Retrieve the list of default settings
     *
     * ```php
     * [
     *     'setting' => 'some value',
     *     'anotherSetting' => 12345,
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getDefaults();

}
