<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for registering permissions
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Permissions implements pm_Hook_Interface
{

    const PLACE_MAIN = 'main';

    const PLACE_ADDITIONAL = 'additional';

    /** @since 18.0.22 */
    const PLACE_ADMIN = 'admin';

    /** @since 18.0.22 */
    const SECTION_ADMIN_TOOLS = 'admin-tools';

    /** @since 18.0.22 */
    const SECTION_ADMIN_APPS = 'admin-apps';

    /** @since 18.0.22 */
    const SECTION_ADMIN_PANEL = 'admin-panel';

    /** @since 18.0.22 */
    const SECTION_ADMIN_APPEARANCE = 'admin-appearance';

    /** @since 18.0.22 */
    const SECTION_ADMIN_STATISTICS = 'admin-statistics';

    /** @since 18.0.22 */
    const SECTION_ADMIN_GENERAL = 'admin-general';

    /** @since 18.0.22 */
    const SECTION_ADMIN_MAIL = 'admin-mail';

    /** @since 18.0.22 */
    const SECTION_ADMIN_SERVER = 'admin-server';

    /** @since 18.0.22 */
    const SECTION_ADMIN_SERVICES = 'admin-services';

    /** @since 18.0.22 */
    const SECTION_ADMIN_MODULES = 'admin-modules';

    /**
     * Retrieve the list of permissions
     *
     * ```php
     * [
     *     'unique_permission_id' => [
     *         'default' => false,
     *         'place' => self::PLACE_MAIN,
     *         'name' => 'Permission name',
     *         'description' => 'Permission description',
     *         'master' => 'master_permission_id',
     *     ],
     *     'another_unique_permission_id' => [
     *         'default' => true,
     *         'place' => self::PLACE_ADMIN,
     *         // 'section' is only active when self::PLACE_ADMIN is used, if omitted, defaults to self::SECTION_ADMIN_MODULES
     *         'section' => self::SECTION_ADMIN_APPS,
     *         'name' => 'Permission name',
     *         'description' => 'Permission description',
     *         'master' => 'another_master_permission_id',
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getPermissions();

}
