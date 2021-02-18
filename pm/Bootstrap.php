<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
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

    /**
     * Get dependency injection container
     *
     * @return Psr\Container\ContainerInterface
     * @see https://www.php-fig.org/psr/psr-11/
     * @since 18.0.24
     * @since 18.0.24 added Psr\Logger\LoggerInterface::class to the container
     */
    public static function getContainer() { }

}
