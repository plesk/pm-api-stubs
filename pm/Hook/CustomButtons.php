<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for custom buttons embedding
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_CustomButtons implements pm_Hook_Interface
{

    const PLACE_COMMON = 1;

    const PLACE_ADMIN_HOME = 2;

    const PLACE_RESELLER_HOME = 3;

    const PLACE_CUSTOMER_HOME = 4;

    const PLACE_ADMIN_TOOLS_AND_SETTINGS = 5;

    const PLACE_RESELLER_TOOLS_AND_SETTINGS = 6;

    const PLACE_HOSTING_PANEL_NAVIGATION = 7;

    const PLACE_DOMAIN = 8;

    /**
     * Retrieve the list of buttons
     *
     *      array(
     *          array(
     *              'place' => self::PLACE_DOMAIN,
     *              'title' => 'Example Button',
     *              'description' => 'Description for example button',
     *              'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
     *              'link' => pm_Context::getBaseUrl() . 'index.php/index/index',
     *          ),
     *          ...
     *      )
     *
     * @return array
     */
    abstract public static function getButtons();

}
