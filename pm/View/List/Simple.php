<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Base list
 *
 * @package Plesk_Modules
 */
class pm_View_List_Simple extends CommonPanel_View_List_Abstract 
{

    const SORT_DIR_UP = 'up';

    const SORT_DIR_DOWN = 'down';

    const ITEMS_UNLIMITED = 100000;

    /**
     * List context options
     *
     * @var array
     */
    protected $_options;

    /**
     * Create list
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
     * @param array $params
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

}
