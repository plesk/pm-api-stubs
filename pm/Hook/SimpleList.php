<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for injection into list
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_SimpleList implements pm_Hook_Interface
{

    /**
     * Check if hook is enabled or not
     *
     * @param string $controller
     * @param string $action
     * @param boolean $activeList
     * @return bool
     */
    public function isEnabled($controller, $action, $activeList) { }

    /**
     * Get list data provider
     *
     * @param string $controller
     * @param string $action
     * @param boolean $activeList
     * @param array|Zend_Db_Select $data Original data provider
     * @return array|Zend_Db_Select
     */
    public function getDataProvider($controller, $action, $activeList, $data) { }

    /**
     * Get list data
     *
     * @param string $controller
     * @param string $action
     * @param boolean $activeList
     * @param array $data Original data
     * @return array
     */
    public function getData($controller, $action, $activeList, $data) { }

    /**
     * Get columns override
     *
     * ```php
     * [
     *     integer => [
     *         'title' => string,
     *         'noEscape' => bool,
     *         'searchable' => bool,
     *         'sortable' => bool,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @param string $controller
     * @param string $action
     * @param boolean $activeList
     * @return array
     *
     * @see pm_View_List_Simple::setColumns()
     */
    public function getColumnsOverride($controller, $action, $activeList) { }

    /**
     * Get additional columns
     *
     *
     * ```php
     * [
     *     'new-column-id' => [
     *         'title' => string,
     *         'noEscape' => bool,
     *         'searchable' => bool,
     *         'sortable' => bool,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @param string $controller
     * @param string $action
     * @param boolean $activeList
     * @return array
     *
     * @see pm_View_List_Simple::setColumns()
     */
    public function getColumns($controller, $action, $activeList) { }

}
