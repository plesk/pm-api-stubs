<?php
// Copyright 1999-2026. WebPros International GmbH. All rights reserved.
/**
 * Hook for registering limits
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Limits implements pm_Hook_Interface
{

    public const PLACE_MAIN = 'main';

    public const PLACE_ADDITIONAL = 'additional';

    /**
     * Retrieve the list of limits
     *
     * ```php
     * [
     *     'unique_limit_id' => [
     *         'default' => false,
     *         'place' => self::PLACE_MAIN,
     *         'name' => 'Limit name',
     *         'description' => 'Limit description',
     *     ],
     *     ...
     * ]
     * ```
     * Note: use only 0 or -1 as default values for numeric limits. Otherwise, the default limit for both reseller
     * plan and subscription will be the same. If a reseller has more than one subscription, it will be impossible to
     * synchronize plan changes with not allowed overselling, because the default value multiplied by the number of
     * subscriptions may exceed the reseller's default limit, which can be confusing for users.
     *
     * @return array
     */
    abstract public function getLimits();

}
