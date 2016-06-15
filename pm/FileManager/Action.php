<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Content action for FileManager
 *
 * @package Plesk_Modules
 * @since 11.5
 */
abstract class pm_FileManager_Action implements pm_Hook_Interface
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
     * ```php
     * [
     *     'name' => 'hello.txt',
     *     'modificationTimestamp' => '1380276799',
     *     'modificationDate' => 'Sep 27, 2013 05:13 PM',
     *     'size' => '8192',
     *     'formatedSize' => '8.0 KB',
     *     'user' => 'user_ifvbjsgcdk',
     *     'group' => 'psacln',
     *     'filePerms' => 'rw- r-- r-- ',
     *     'isDirectory' => false,
     *     'icon' => '/theme/icons/16/plesk/file-txt.png',
     *     'isReadonly' => false,
     *     'currentDir' => '/httpdocs',
     * ]
     * ```
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
     * @params array $params
     * @return string
     */
    public function lmsg($key, $params = []) { }

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
