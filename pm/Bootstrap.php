<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Class for initialization Plesk objects
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Bootstrap
{

    /**
     * Init configuration, error handling, logging, database adapter
     */
    public static function init() { }

    /**
     * Get database adapter for connecting and performing operations
     *
     * @return Zend_Db_Adapter_Abstract
     */
    public static function getDbAdapter() { }

}
