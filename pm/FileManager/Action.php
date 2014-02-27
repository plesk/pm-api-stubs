<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Content action for FileManager
 *
 * @package Plesk_Modules
 */
abstract class pm_FileManager_Action 
{

    /**
     * Module identity
     *
     * @var string
     */
    protected $_moduleId;

    /**
     * File or directory item
     *
     * @var array
     */
    protected $_item = [];

    /**
     * Create action
     *
     * @param string $moduleId
     * @param array $item
     */
    public function __construct($moduleId, $item) { }

    /**
     * Retrieve translated message from locale file
     *
     * @param string $key
     * @return string
     */
    public function lmsg($key) { }

    /**
     * Retrieve name for action
     *
     * @return string
     */
    public function getName() { }

    /**
     * Retrieve title for action
     *
     * @return string
     */
    public function getTitle() { }

    /**
     * Retrieve URL for action
     *
     * @return string
     */
    public function getHref() { }

    /**
     * Checks if action is available for a file
     *
     * @return bool
     */
    public function isActive() { }

    /**
     * Checks if action is default for a file
     *
     * @return bool
     */
    public function isDefault() { }

}
