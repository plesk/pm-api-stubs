<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for custom buttons embedding
 *
 * @package Plesk_Modules
 * @since 12.0
 */
abstract class pm_Hook_CustomButtons implements pm_Hook_Interface
{

    /** @since 12.0 */
    const PLACE_COMMON = 1;

    /** @since 12.0 */
    const PLACE_ADMIN_HOME = 2;

    /** @since 12.0 */
    const PLACE_RESELLER_HOME = 3;

    /** @since 12.0 */
    const PLACE_CUSTOMER_HOME = 4;

    /** @since 12.0 */
    const PLACE_ADMIN_TOOLS_AND_SETTINGS = 5;

    /** @since 12.0 */
    const PLACE_RESELLER_TOOLS_AND_SETTINGS = 6;

    /** @since 12.0 */
    const PLACE_HOSTING_PANEL_NAVIGATION = 7;

    /** @since 12.0 */
    const PLACE_DOMAIN = 8;

    /** @since 12.0 */
    const PLACE_DOMAIN_PROPERTIES = 9;

    /** @since 12.5 */
    const PLACE_TOOLBAR = 10;

    /** @since 12.5 */
    const PLACE_LIST_ACTIONS = 11;

    /** @since 17.0 */
    const PLACE_ADMIN_NAVIGATION = 12;

    /** @since 17.0 */
    const PLACE_RESELLER_NAVIGATION = 13;

    /** @since 17.0 */
    const PLACE_HOSTING_PANEL_TABS = 14;

    /** @since 17.8 */
    const PLACE_HEADER_NAVIGATION = 15;

    /** @since 18.0 */
    const PLACE_DOMAIN_PROPERTIES_DYNAMIC = 16;

    /** @since 17.0 */
    const SECTION_RESELLER_TOOLS_SERVICES = 'myPleskButtons';

    /** @since 17.0 */
    const SECTION_RESELLER_TOOLS_RESOURCES = 'resourcesButtons';

    /** @since 17.0 */
    const SECTION_RESELLER_TOOLS_PLESK_MANAGEMENT = 'toolsButtons';

    /** @since 17.0 */
    const SECTION_RESELLER_TOOLS_ADDITIONAL_SERVICES = 'customButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_MAIL = 'mailButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_PLESK = 'panelButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_GENERAL = 'generalButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_SECURITY = 'securityButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_APPEARANCE = 'uiButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_STATISTICS = 'statisticsButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_APPS_AND_DBS = 'applicationsAndDatabasesButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_EXTERNAL_SERVICES = 'myPleskButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_SERVER_MANAGEMENT = 'serverManagementButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_ADDITIONAL_SERVICES = 'customButtons';

    /** @since 17.0 */
    const SECTION_ADMIN_TOOLS_TOOLS_AND_RESOURCES = 'toolsAndResourcesButtons';

    /** @since 17.8 */
    const SECTION_ADMIN_TOOLS_TROUBLESHOOTING_BUTTONS = 'troubleshootingButtons';

    /** @since 17.0 */
    const SECTION_NAV_GENERAL = 'general';

    /** @since 17.0 */
    const SECTION_NAV_HOSTING = 'hosting';

    /** @since 17.0 */
    const SECTION_NAV_PROFILE = 'profile';

    /** @since 17.0 */
    const SECTION_NAV_ADDITIONAL = 'custom_buttons';

    /** @since 17.0 */
    const SECTION_NAV_SERVER_MANAGEMENT = 'server_management';

    /** @since 18.0 */
    const SECTION_DOMAIN_PROPS_DYNAMIC_FILES_AND_DATABASES = 'filesAndDatabases';

    /** @since 18.0 */
    const SECTION_DOMAIN_PROPS_DYNAMIC_DEV_TOOLS = 'devTools';

    /** @since 18.0 */
    const SECTION_DOMAIN_PROPS_DYNAMIC_SECURITY = 'security';

    /** @since 18.0 */
    const SECTION_DOMAIN_PROPS_DYNAMIC_MAIL = 'mail';

    /** @since 18.0 */
    const SECTION_DOMAIN_PROPS_DYNAMIC_HOSTING = 'hosting';

    /**
     * Retrieve the list of buttons
     *
     * ```php
     * [
     *     [
     *         'place' => self::PLACE_DOMAIN_PROPERTIES_DYNAMIC,
     *         'section' => self::SECTION_DOMAIN_PROPS_DYNAMIC_DEV_TOOLS,
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
