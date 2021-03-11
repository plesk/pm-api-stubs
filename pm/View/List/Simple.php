<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Base list
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_View_List_Simple
{

    /** @since 12.5 */
    const COLUMN_SELECTION = 'Jsw.list.COLUMN_SELECTION';

    const SORT_DIR_UP = 'up';

    const SORT_DIR_DOWN = 'down';

    const ITEMS_UNLIMITED = 100000;

    /**
     * List columns
     *
     * @var array
     */
    protected $_columns = [];

    /**
     * List data
     *
     * @var array
     */
    protected $_data = [];

    /**
     * List tools
     *
     * @var array
     */
    protected $_tools = [];

    /**
     * URL for retrieving list data
     *
     * @var array|string
     */
    protected $_dataUrl = [];

    /**
     * Paging allowed
     *
     * @var boolean
     */
    protected $_pageable = true;

    /**
     * Default value of items per page
     *
     * @var int
     */
    protected $_defaultItemsPerPage = 25;

    /**
     * Default sort field
     *
     * @var string
     */
    protected $_defaultSortField;

    /**
     * Default sort direction
     * Must be self::SORT_DIR_UP or self::SORT_DIR_DOWN
     *
     * @var string
     */
    protected $_defaultSortDirection = 'up';

    /**
     * List context options
     *
     * @var array
     */
    protected $_options;

    /**
     * Create list
     *
     * ```php
     * $options = [
     *     'pageable' => boolean,
     *     'defaultItemsPerPage' => int,
     *     'defaultSortField' => string,
     *     'defaultSortDirection' => string,
     *     'dataUrl' => array|string,
     *     'columns' => array,
     *     'data' => array,
     *     'tools' => array,
     * ]
     * ```
     *
     * @param Zend_View $view
     * @param Zend_Controller_Request_Abstract $request
     * @param array $options Additional options available in $this->_options property
     */
    public function __construct(Zend_View $view, Zend_Controller_Request_Abstract $request, $options = []) { }

    /**
     * Set list columns from associated array
     *
     * ```php
     * [
     *     'first-column-id' => [
     *         'title' => string,
     *         'noEscape' => bool,
     *         'searchable' => bool,
     *         'sortable' => bool,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @param array $columns
     */
    public function setColumns(array $columns) { }

    /**
     * add search filters from associated array
     *
     * ```php
     * [
     *     'column-id' =>
     *     [
     *         'title' => string,
     *         'fields' => [string, string],
     *         'options' => [string => string],
     *     ]
     * ]
     * ```
     *
     * @param array $filters
     * @since 12.5
     */
    public function addSearchFilters(array $filters) { }

    /**
     * Set list data from associated array
     *
     * ```php
     * [
     *     [
     *         'first-column-id' => string,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @param array $data
     */
    public function setData(array $data) { }

    /**
     * Fetch list data
     *
     * @return array
     */
    public function fetchData() { }

    /**
     * Set URL for retrieving list data
     *
     * ```php
     * [
     *     'controller' => string,
     *     'action' => string,
     *     'link' => string,
     * ]
     * ```
     *
     * @param array|string $params
     */
    public function setDataUrl($params) { }

    /**
     * Set list tools from associated array
     *
     * ```php
     * [
     *     [
     *         'title' => string,
     *         'description' => string,
     *         'class' => string,
     *         'controller' => string,
     *         'action' => string,
     *         'link' => string,
     *         'execGroupOperation' => string|[
     *             'url' => string,
     *             'submitHandler' => 'function(url, ids) {}'
     *         ],
     *     ],
     * ]
     * ```
     *
     * @param array $tools
     */
    public function setTools(array $tools) { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     * @since 12.0 added argument $params
     */
    public function lmsg($key, $params = []) { }

    /**
     * Get unique list identifier
     *
     * @return string
     */
    public function getId() { }

}
