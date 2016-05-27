<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for registering limits
 *
 * @package Plesk_Modules
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
