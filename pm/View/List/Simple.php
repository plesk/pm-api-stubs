<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * @package Plesk_Modules
 */
class pm_View_List_Simple extends CommonPanel_View_List_Abstract 
{

    const SORT_DIR_UP = 'up';

    const SORT_DIR_DOWN = 'down';

    const ITEMS_UNLIMITED = 100000;

    /**
     * @internal
     * @var bool
     */
    protected $_postponeSetup = true;

    /**
     * @var string name of class implements Zend_Paginator_Adapter_Interface
     */
    protected $_paginatorAdapterName = 'CommonPanel_View_List_Paginator_Array';

    /**
     * Create list
     * @param Zend_View $view
     * @param Zend_Controller_Request_Abstract $request
     * @param array $options
     */
    public function __construct($view, $request, $options = []) { }

    /**
     * Set list columns from associated array
     * @param array $columns
     */
    public function setColumns($columns) { }

    /**
     * Get list columns
     * @internal
     * @return array
     */
    public function getColumns() { }

    /**
     * Set list data from associated array
     * @param array $data
     */
    public function setData($data) { }

    /**
     * Get list data
     * @internal
     * @return array
     */
    protected function _getDataProvider() { }

    /**
     * Fetch list data
     * @return array
     */
    public function fetchData() { }

    /**
     * Set URL for retrieving list data
     * @param array $params
     */
    public function setDataUrl($params) { }

    /**
     * Get data URL params
     * @internal
     * @return array
     */
    public function getDataUrl() { }

    /**
     * Set list tools from associated array
     * @param array $tools
     */
    public function setTools($tools) { }

    /**
     * Get list tools
     * @internal
     * @return array
     */
    public function getTools() { }

    /**
     * Setup translation engine
     * @internal
     */
    protected function _setupTranslator() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @return string
     */
    public function lmsg($key) { }

}
