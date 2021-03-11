<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for adding custom content to domain card in dynamic view
 *
 * @package Plesk_Modules
 * @since 18.0
 */
abstract class pm_Hook_DynamicList implements pm_Hook_Interface
{

    /**
     * Retrieve the list of domain card tabs
     *
     * ```php
     * [
     *      'uniqueTabId' => [
     *          'title' => 'My Awesome Tab',
     *          'content' => '<span>My awesome tab content</span>',
     *          'order' => 3,
     *      ]
     * ]
     * ```
     *
     * @param string $itemId identifier of domain or alias object in format {a|d}:{objectId}
     * @return array
     */
    abstract public function getTabs($itemId);

}
