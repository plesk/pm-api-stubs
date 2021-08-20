<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for injection into active lists
 *
 * @package Plesk_Modules
 * @since 17.0
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
     *         'messages' => [ // optional
     *             [
     *                 'icon' => string, // optional
     *                 'info' => string,
     *                 'noEscape' => bool, // optional, default is false
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
