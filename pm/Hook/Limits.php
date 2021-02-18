<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for registering limits
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Limits implements pm_Hook_Interface
{

    const PLACE_MAIN = 'main';

    const PLACE_ADDITIONAL = 'additional';

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
     *
     * @return array
     */
    abstract public function getLimits();

}
