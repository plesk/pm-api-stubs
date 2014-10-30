<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Base list
 *
 * @package Plesk_Modules
 */
class pm_View_List_Simple extends CommonPanel_View_List_Abstract 
{

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
     *      $options = array (
     *          'pageable' => boolean,
     *          'defaultItemsPerPage' => int,
     *          'defaultSortField' => string,
     *          'defaultSortDirection' => string,
     *          'dataUrl' => array|string,
     *          'columns' => array,
     *          'data' => array,
     *          'tools' => array,
     *      )
     *
     * @param Zend_View $view
     * @param Zend_Controller_Request_Abstract $request
     * @param array $options Additional options available in $this->_options property
     */
    public function __construct($view, $request, $options = []) { }

    /**
     * Set list columns from associated array
     *
     *      array (
     *          'first-column-id' => array (
     *              'title' => string,
     *              'noEscape' => bool,
     *              'searchable' => bool,
     *              'sortable' => bool,
     *          ),
     *      )
     *
     * @param array $columns
     */
    public function setColumns($columns) { }

    /**
     * Set list data from associated array
     *
     *      array (
     *          array (
     *              'first-column-id' => string,
     *          ),
     *      )
     *
     * @param array $data
     */
    public function setData($data) { }

    /**
     * Fetch list data
     *
     * @return array
     */
    public function fetchData() { }

    /**
     * Set URL for retrieving list data
     *
     *      array (
     *          'controller' => string,
     *          'action' => string,
     *          'link' => string,
     *      )
     *
     * @param array|string $params
     */
    public function setDataUrl($params) { }

    /**
     * Set list tools from associated array
     *
     *      array (
     *          array (
     *              'title' => string,
     *              'description' => string,
     *              'class' => string,
     *              'controller' => string,
     *              'action' => string,
     *              'link' => string,
     *              'execGroupOperation' => string|array(
     *                  'url' => string,
     *                  'submitHandler' => 'function(url, ids) {}'
     *              ),
     *          ),
     *      )
     *
     * @param array $tools
     */
    public function setTools($tools) { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public function lmsg($key, $params = []) { }

    /**
     * Get unique list identifier
     *
     * @return string
     */
    public function getId() { }

}
