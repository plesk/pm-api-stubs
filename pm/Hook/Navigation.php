<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for navigation embedding
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_Navigation implements pm_Hook_Interface
{

    /**
     * Retrieve the list of buttons
     *
     * ```php
     * [
     *     [
     *         'controller' => string, // Action name to use when generating href to the page.
     *         'action' => string, // Controller name to use when generating href to the page.
     *         'pages' => [ // Child pages of the page. (optional)
     *             ...
     *         ]
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array An array of pages config
     */
    abstract public function getNavigation();

}
