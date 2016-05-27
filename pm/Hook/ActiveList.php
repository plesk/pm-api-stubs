<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for injection into active lists
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_ActiveList implements pm_Hook_Interface
{

    /**
     * Retrieve the list of services for specific item
     *
     * ```php
     * [
     *     [
     *         'title' => string,
     *         'icon' => string,
     *         'link' => string,
     *         'description' => string,
     *         'toolbar' => [ // optional
     *             [
     *                 'title' => string,
     *                 'link' => string,
     *             ],
     *             ...
     *         ],
     *     ],
     * ]
     * ```
     *
     * @param string $controller
     * @param string $action
     * @param string $itemId
     * @return array
     */
    public function getItemServices($controller, $action, $itemId) { }

}
