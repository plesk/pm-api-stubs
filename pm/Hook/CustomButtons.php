<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Hook for custom buttons embedding
 *
 * @package Plesk_Modules
 * @since 12.0
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

    const PLACE_DOMAIN_PROPERTIES = 9;

    const PLACE_TOOLBAR = 10;

    const PLACE_LIST_ACTIONS = 11;

    const PLACE_ADMIN_NAVIGATION = 12;

    const PLACE_RESELLER_NAVIGATION = 13;

    const PLACE_HOSTING_PANEL_TABS = 14;

    const SECTION_RESELLER_TOOLS_SERVICES = 'myPleskButtons';

    const SECTION_RESELLER_TOOLS_RESOURCES = 'resourcesButtons';

    const SECTION_RESELLER_TOOLS_PLESK_MANAGEMENT = 'toolsButtons';

    const SECTION_RESELLER_TOOLS_ADDITIONAL_SERVICES = 'customButtons';

    const SECTION_ADMIN_TOOLS_MAIL = 'mailButtons';

    const SECTION_ADMIN_TOOLS_PLESK = 'panelButtons';

    const SECTION_ADMIN_TOOLS_GENERAL = 'generalButtons';

    const SECTION_ADMIN_TOOLS_SECURITY = 'securityButtons';

    const SECTION_ADMIN_TOOLS_APPEARANCE = 'uiButtons';

    const SECTION_ADMIN_TOOLS_STATISTICS = 'statisticsButtons';

    const SECTION_ADMIN_TOOLS_APPS_AND_DBS = 'applicationsAndDatabasesButtons';

    const SECTION_ADMIN_TOOLS_EXTERNAL_SERVICES = 'myPleskButtons';

    const SECTION_ADMIN_TOOLS_SERVER_MANAGEMENT = 'serverManagementButtons';

    const SECTION_ADMIN_TOOLS_ADDITIONAL_SERVICES = 'customButtons';

    const SECTION_ADMIN_TOOLS_TOOLS_AND_RESOURCES = 'toolsAndResourcesButtons';

    const SECTION_NAV_GENERAL = 'general';

    const SECTION_NAV_HOSTING = 'hosting';

    const SECTION_NAV_PROFILE = 'profile';

    const SECTION_NAV_ADDITIONAL = 'custom_buttons';

    const SECTION_NAV_SERVER_MANAGEMENT = 'server_management';

    /**
     * Retrieve the list of buttons
     *
     * ```php
     * [
     *     [
     *         'place' => self::PLACE_DOMAIN,
     *         'title' => 'Example Button',
     *         'description' => 'Description for example button',
     *         'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
     *         'link' => pm_Context::getBaseUrl() . 'index.php/index/index',
     *         'newWindow' => false,
     *         'contextParams' => true,
     *         'visibility' => [$this, 'isExampleButtonVisible'],
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getButtons();

}
